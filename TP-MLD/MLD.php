<?php
// -> commande 1,N (1 user pour N order)
user(id, email, password, firstname, lastname, birthdate, adress, complements, postal_code, city, #id_order)

// -> contient 1,N (1 order pour N order_line)
order(id, reference, date, #order_line_id)

// -> contient 1,N (1 order_line pour N product)
order_line(id, quantity, price, #product)

// -> fait partie de (N product pour N category)
product(id, name, description, price #category)

// -> est represente par (1 product pour N picture)
product(id, src, alt, #picture)