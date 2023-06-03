CREATE TABLE products(
    sku VARCHAR(255) PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    price FLOAT NOT NULL,
    product_type VARCHAR(255) NOT NULL,
    size_mb INT NULL,
    weight_kg INT NULL,
    height_cm INT NULL,
    length_cm INT NULL,
    width_cm INT NULL
)