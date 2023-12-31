#!/bin/bash
mysqldump -u thinksurfmedia_dhar -pGw=La].&{fiK thinksurfmedia_dhar > /home6/thinksurfmedia/dharbrothers.thinksurfmedia.in/DBBackup/MySQLDBBK$(date +%Y_%m_%d__%H_%M_%S$%M%S).sql;
# MySQL connection parameters
DB_USER="thinksurfmedia_dhar"
DB_PASSWORD="Gw=La].&{fiK"
DB_NAME="thinksurfmedia_dhar"

# MySQL commands
mysql -u "$DB_USER" -p"$DB_PASSWORD" <<EOF
use $DB_NAME;

--IF Drop few Tables
--DROP TABLE leads, about_pages, articles, banners, faq_categories;

-- Drop all tables in the current database
SET FOREIGN_KEY_CHECKS = 0; -- Disable foreign key checks temporarily
SELECT GROUP_CONCAT(table_name) INTO @tables_to_drop
FROM information_schema.tables
WHERE table_schema = DATABASE();

SET @drop_query = CONCAT('DROP TABLE ', @tables_to_drop);
PREPARE stmt FROM @drop_query;
EXECUTE stmt;
DEALLOCATE PREPARE stmt;
SET FOREIGN_KEY_CHECKS = 1; -- Re-enable foreign key checks
source /home6/thinksurfmedia/dharbrothers.thinksurfmedia.in/db.sql;
EOF



