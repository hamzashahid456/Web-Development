// For login
const express = require('express');
const router = express.Router();
const expressValidator = require('express-validator');
const bcrypt = require('bcryptjs');
const passport = require('passport');



// Bring in user model
let User = require('../models/user');


// Register form
router.get('/register', (req, res) => {
  res.render('register');
} );

// Register process
router.post('/register', (req, res) => {
  const name = req.body.name;
  const email = req.body.email;
  const username = req.body.username;
  const password = req.body.password;
  const confirm = req.body.password2;

  req.check('name', 'Name is Required').notEmpty();
  req.check('email', 'Email is Required').notEmpty();
  req.check('email', 'Email is not valid').isEmail();
  req.check('username', 'Username is Required').notEmpty();
  req.check('password', 'Password is Required').notEmpty();
  req.check('password2', 'Password do not match').equals(req.body.password);

  let errors = req.validationErrors();

  if(errors) {
    res.render('register', {
      errors:errors
    } );
  } else {
    let newUser = new User({
      name:name,
      email:email,
      username:username,
      password:password
    });

    bcrypt.genSalt(10, (err, salt) => {
      bcrypt.hash(newUser.password, salt, (err, hash) => {
        if(err) {
          console.log(err);
        }
        newUser.password = hash;    // for having password in readable form

        newUser.save( (err) => {
          if(err) {
            console.log(err);
          } else {
            req.flash('success', 'You are now registered and can login');
            res.redirect('/users/login');
          }

        } );

      } );

    } );

  }

} );


// Login Form
router.get('/login', (req, res) => {
  res.render('login');
} );

// Login process
router.post('/login', (req, res, next) => {
  passport.authenticate('local', {
    successRedirect: '/',
    failureRedirect: '/users/login',
    failureFlash: true
  })(req, res, next);
} );

// logout
router.get('/logout', (req, res) => {
    // Asynchronous approach (new)
  req.logout(function(err) {
    if (err) { return next(err); }
    req.flash('success', 'Your are logged out');
    res.redirect('/users/login');
  });


  // Synchronous approach (old)
  // req.logout();
  // req.flash('success', 'Your are logged out');
  // res.redirect('/users/login');
} );


module.exports = router;
