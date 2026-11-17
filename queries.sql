USE exhibition_db;

-- All columns and all five records.
SELECT * FROM cars;

-- BMW X3, Ford Falcon, Holden Astra, Holden Commodore, Toyota Corolla.
SELECT make, model, price FROM cars ORDER BY make, model;

-- BMW X3, Ford Falcon, Toyota Corolla, Holden Commodore.
SELECT make, model FROM cars WHERE price >= 20000;

-- BMW 35000, Ford 39000, Holden 21000, Toyota 20000.
SELECT make, AVG(price) FROM cars GROUP BY make;

-- Holden Astra only.
SELECT make, model FROM cars WHERE price < 15000 AND price > 10000;
