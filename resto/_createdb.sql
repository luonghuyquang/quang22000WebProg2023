USE resto;
DROP TABLE IF EXISTS quang_tables, quang_reservation, quang_reserved;
CREATE TABLE quang_tables (
  table_id VARCHAR(50) NOT NULL PRIMARY KEY,
  seats INT
);
INSERT INTO quang_tables (table_id, seats)
VALUES ('meeting_room', 10),
       ('table_1', 2),
       ('table_2', 2),
       ('table_3', 2),
       ('table_4', 4),
       ('table_5', 4),
       ('table_6', 6)
;

CREATE TABLE quang_reservation (
  reservation_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  FOREIGN KEY (table_id) REFERENCES quang_tables(table_id),
  reservation_code VARCHAR(6) NULL,
  cname VARCHAR(30) NOT NULL,
  phone VARCHAR(20) NOT NULL,
  email VARCHAR(50) NOT NULL,
  table_id VARCHAR(20) NOT NULL,
  start_datetime DATETIME,
  end_datetime DATETIME,
  guests_nbr INT NOT NULL,
  special_request VARCHAR(255),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);