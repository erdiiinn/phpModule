CREATE TABLE categories(
    id INTEGER PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
)

CREATE TABLE products(
    id INTEGER PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    category_id INTEGER NOT NULL,
    FOREIGN KEY (category_id) REFERENCES categories(id)
);

INSERT INTO categories(id, name) VALUES
(1, 'Fruit'),
(2, 'Bakery'),
(3, 'Dry Goods'),
(4, 'Drinks');