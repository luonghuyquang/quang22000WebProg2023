USE resto;
DROP TABLE IF EXISTS quang_tables, quang_reservation, quang_reserved;
CREATE TABLE quang_tables (
  table_id VARCHAR(30) NOT NULL PRIMARY KEY,
  seats INT,
  table_name VARCHAR(30),
  table_spec VARCHAR(60)
);
INSERT INTO quang_tables (table_id, seats, table_name, table_spec)
VALUES ('meeting_room_1', 10, 'Meeting Room 1', 'Good for Business and Event'),
       ('table_1', 2, 'Table 1', 'Good for Friends'),
       ('table_2', 2, 'Table 2', 'Good for Dating'),
       ('table_3', 2, 'Table 3', 'Good for Singles'),
       ('table_4', 4, 'Table 4', 'Good for Friends'),
       ('table_5', 4, 'Table 5', 'Good for Business Group'),
       ('table_6', 6, 'Table 6', 'Good for Business Group')
;

CREATE TABLE quang_reservation (
  reservation_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  reservation_code VARCHAR(6) NULL,
  cust_name VARCHAR(30) NOT NULL,
  phone_nbr VARCHAR(20) NOT NULL,
  cust_email VARCHAR(60) NOT NULL,
  FOREIGN KEY (cust_email) REFERENCES aisha_customer(email_address),
  start_datetime DATETIME,
  end_datetime DATETIME,
  nbr_of_guests INT NOT NULL,
  special_request VARCHAR(255),
  table_id VARCHAR(30) NOT NULL,
  FOREIGN KEY (table_id) REFERENCES quang_tables(table_id),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);