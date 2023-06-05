const express = require('express');
const router = express.Router();



// Article Model
let Article = require('../models/article');
// User Model
let User = require('../models/user');

// Add Route
router.get('/add', ensureAuthenticated, (req, res) => {
  res.render('add_article', {
    title: "Add Articles"
  });
});


// Add submit POST route

router.post('/add', (req, res) => {
  req.check('title', 'Title is required').notEmpty();
  // req.check('author', 'Author is required').notEmpty();
  req.check('body', 'Body is required').notEmpty();

  // Get errors
  let errors = req.validationErrors();

  if(errors) {
    res.render('add_article', {
      title:'Add Article',
      errors:errors
    } );

  } else {

    let article = new Article();
    article.title = req.body.title;
    article.author = req.user._id;
    article.body = req.body.body;
    // console.log(req.body.title);

    article.save( (err) => {
        if(err) {
          console.log(err);
          return;
        } else {
          req.flash('success', 'Article Added');
          res.redirect('/');
        }
    });

  }

});

// Load Edit Form
router.get('/edit/:id', ensureAuthenticated, (req, res) => {
  Article.findById(req.params.id, (err, article) => {
    res.render('edit_article', {
      title:'Edit Article',
      article: article
    } );
  } );
} );

// Update submit POST route
router.post('/edit/:id', (req, res) => {
  let article = {};
  article.title = req.body.title;
  article.author = req.body.author;
  article.body = req.body.body;

  // Query for analyzing which to Update
  let query = { _id:req.params.id }

  Article.update(query, article, (err) => {
      if(err) {
        console.log(err);
        return;
      } else {
        req.flash('success', 'Article  Updated');
        res.redirect('/');
      }
  });

});


// For deleting article
router.delete('/:id', (req, res) => {
  if(!req.user._id){
    res.status(500).send();
  }


  let query = { _id:req.params.id }

  Article.findById(req.params.id, (err, article) => {
    if(article.author != req.user._id){
      res.status(500).send();
    } else {
      Article.remove(query, (err) => {
        if(err) {
          console.log(err);
        } else{     // For response
          res.send('Success');
        }


      } );
    }


  } );


} );

// Get single article
router.get('/:id', (req, res) => {
  Article.findById(req.params.id, (err, article) => {
    User.findById(article.author, (err, user) => {
      res.render('article', {
        article: article,
        author: user.name
      } );
    } );
  } );
} );

// Access control
function ensureAuthenticated(req, res, next){
  if(req.isAuthenticated()){
    return next();
  } else {
    req.flash('danger', 'Please Login');
    res.redirect('/users/login');
  }
}


module.exports = router;
