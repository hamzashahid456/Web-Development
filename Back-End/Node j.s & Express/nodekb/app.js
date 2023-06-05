const express = require('express');
const path = require('path');
const mongoose = require('mongoose');
const bodyParser = require('body-parser');
const expressValidator = require('express-validator');
const flash = require('connect-flash');
const session = require('express-session');
const config = require('./config/database');
const passport = require('passport');

// COnnecting with database
mongoose.connect(config.database);
let db = mongoose.connection;

// Check connecticonst express = require('express');on
db.once('open', () => {
console.log('Connected to MongoDB..')});


// Check for DB errors
db.on('error', (err) => {
  console.log(err);
})


// Init app
const app = express();

// Bring in Models
let Article = require('./models/article');


// load view engine
app.set('views', path.join(__dirname, 'views') );
app.set('view engine', 'pug');

// body parser middleware
// create application/json parser
app.use(bodyParser.json());

// create application/x-www-form-urlencoded parser
app.use(bodyParser.urlencoded({ extended: false }));

// Set public folder (for interface design)
app.use(express.static(path.join(__dirname,'public') ) );

// Express session middleware
app.use(session({
   secret: 'keyboard cat',
   resave: true,
   saveUninitialized: true,
 }));

 // Express messages middleware
 app.use(require('connect-flash')());
app.use(function (req, res, next) {
  res.locals.messages = require('express-messages')(req, res);
  next();
});

// Express validator middleware (optional)
app.use(expressValidator({
  errorFormatter: (param, msg, value) => {
    var namespace = param.split('.'),
    root = namespace.shift(),
    formParam = root;

    while (namespace.length) {
      formParam += '['+namespace.shift()+']';
    }
    return{
      param: formParam,
      msg: msg,
      value: value
    };
  }
}));

// Passport config
require('./config/passport')(passport);
// Passport middleware
app.use(passport.initialize());
app.use(passport.session());

app.get('*', (req, res, next) => {
  res.locals.user = req.user || null;
  next(); 
} );

// Home Route
app.get('/', (req, res) => {
  // let articles = [
  //   {
  //     id: 1,
  //     title: "Article One",
  //     author: "Hamza",
  //     body: "This is article one."
  //   },
  //   {
  //     id: 2,
  //     title: "Article Two",
  //     author: "Hamza",
  //     body: "This is article two."
  //   },
  //   {
  //     id: 3,
  //     title: "Article Three",
  //     author: "Hamza",
  //     body: "This is article three."
  //   }
  // ];

  Article.find({}, (err,articles) => {
    if(err) {
      console.log(err);
    } else {
      res.render('index', {
        title: "Articles",
        articles: articles
      });
    }



  });
  // res.render('index', {
  //   title: "Articles",
  //   articles: articles
  // });
});

app.use(expressValidator());

// Route files
let articles = require('./routes/articles');
app.use('/articles', articles);

let users = require('./routes/users');
app.use('/users', users);


// Start server
app.listen(3000, () => {
  console.log('Server started on port 3000...');
});
