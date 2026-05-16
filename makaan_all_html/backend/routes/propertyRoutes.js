const express = require("express");
const router = express.Router();
const db = require("../db");

// GET all properties
router.get("/properties", (req, res) => {
  db.query("SELECT * FROM properties", (err, result) => {
    if (err) {
      console.log(err);
      res.status(500).send("Error fetching data");
    } else {
      res.json(result);
    }
  });
});

// POST property
router.post("/properties", (req, res) => {
  const {
    title, price, location, image,
    status, type, area, beds, baths, detailId
  } = req.body;

  const sql = `
    INSERT INTO properties 
    (title, price, location, image, status, type, area, beds, baths, detailId)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
  `;

  db.query(sql, 
    [title, price, location, image, status, type, area, beds, baths, detailId],
    (err, result) => {
      if (err) {
        console.log(err);
        res.status(500).send("Insert error");
      } else {
        res.send("Property added");
      }
    }
  );
});

module.exports = router;