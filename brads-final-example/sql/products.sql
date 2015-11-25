SELECT *
FROM product
LEFT JOIN file USING (product_id)