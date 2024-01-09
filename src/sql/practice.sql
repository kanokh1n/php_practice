# - 1
SELECT model, speed, hd
FROM PC
WHERE price < 500

# - 2
SELECT DISTINCT maker
FROM Product
WHERE type = 'Printer'

# - 3
SELECT model, ram, screen
FROM Laptop
WHERE price > 1000

# - 4
SELECT *
FROM Printer
WHERE color = 'y'

# - 5
SELECT model, speed, hd
FROM PC
WHERE (cd = '12x' or cd = '24x') and price < 600

# - 6
SELECT P.maker, L.speed
FROM Product P
JOIN Laptop L ON P.model = L.model
WHERE P.type = 'Laptop' AND L.hd >= 10

# - 7
SELECT Product.model, price
FROM Product
JOIN PC ON Product.model = PC.model
WHERE Product.maker = 'B'

UNION

SELECT Product.model, price
FROM Product
JOIN Laptop ON Product.model = Laptop.model
WHERE Product.maker = 'B'

UNION

SELECT Product.model, price
FROM Product
JOIN Printer ON Product.model = Printer.model
WHERE Product.maker = 'B';

# - 8
SELECT DISTINCT maker
FROM Product
WHERE type = 'PC'
  AND NOT EXISTS (
    SELECT *
    FROM Product AS P
    WHERE P.maker = Product.maker
      AND P.type = 'Laptop'
)

# - 9
SELECT DISTINCT Maker
FROM Product
         JOIN PC ON Product.model = PC.model
WHERE PC.speed >= 450

# - 10
SELECT model, price
FROM Printer
WHERE price = (SELECT MAX(price) FROM Printer);

# - 11
SELECT AVG(speed) AS average_speed
FROM PC

# - 12
SELECT AVG(speed) AS average_speed
FROM Laptop
WHERE price > 1000

# - 13
SELECT AVG(PC.speed) AS average_speed
FROM PC
         JOIN Product ON PC.model = Product.model
WHERE Product.maker = 'A'

# - 14
SELECT C.class, S.name, C.country
FROM Ships S
         JOIN Classes C ON S.class = C.class
WHERE C.numGuns >= 10

# - 15
SELECT HD
FROM PC
GROUP BY HD
HAVING COUNT(HD) >= 2

# - 16
SELECT DISTINCT P1.model AS model1,
                P2.model AS model2,
                P1.speed, P1.ram
FROM PC P1, PC P2
WHERE P1.model > P2.model
  AND P1.speed = P2.speed
  AND P1.ram = P2.ram
# - 17