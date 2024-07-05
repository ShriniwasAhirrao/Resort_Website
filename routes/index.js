var express = require('express');
var router = express.Router();
var database = require('../database');
/* GET home page. */
router.get('/', function (req, res, next) {
  res.render('index', { title: 'Express', session: req.session });
});
router.post('/login', function (request, response, next) {
  var user_email_address = request.body.user_email_address;
  var user_password = request.body.user_password;
  if (user_email_address && user_password) {
    query = `
        SELECT * FROM user_login 
        WHERE user_email = "${user_email_address}"
        `;
    database.query(query, function (error, data) {
      if (data.length > 0) {
        for (var count = 0; count < data.length; count++) {
          if (data[count].user_password == user_password) {
            request.session.user_id = data[count].user_id;
            response.redirect("/booking");
          }
          else {
            response.send('Incorrect Password');
          }
        }
      }
      else {
        response.send('Incorrect Email Address');
      }
      response.end();
    });
  }
  else {
    response.send('Please Enter Email Address and Password Details');
    response.end();
  }
});
router.post('/confirmation', function (request, response, next) {
  var user_booking_name = request.body.name;
  var user_booking_email = request.body.email;
  var user_booking_check_in = request.body.checkin;
  var user_booking_check_out = request.body.checkout;
  var user_booking_guests = request.body.guests;

  if (user_booking_name && user_booking_email && user_booking_check_in && user_booking_check_out && user_booking_guests) {
    var query = `
      INSERT INTO bookings (user_booking_name, user_booking_email, user_booking_check_in, user_booking_check_out, user_booking_guests) 
      VALUES ("${user_booking_name}", "${user_booking_email}", ?, ?, ?)
    `;
    database.query(query, [user_booking_name, user_booking_email, user_booking_check_in, user_booking_check_out, user_booking_guests], function (error, result) {
      if (error) {
        console.error('Error inserting booking:', error);
        response.status(500).send('Internal Server Error');
      } else {
        // Redirect to a confirmation page upon successful insertion
        response.redirect("/confirmation-success");
      }
    });
  } else {
    response.status(400).send('Please provide all the details.');
  }
});

router.get('/logout', function (request, response, next) {
  request.session.destroy();
  response.redirect("/");
});

router.get('/confirmation-success', function (req, res, next) {
  res.render('confirmation-success', { title: 'Confirmation Success' });
});


module.exports = router;