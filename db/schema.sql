-- Run this once against your existing MySQL database (e.g. via phpMyAdmin)
-- to create the table that submit-form.php writes to.

CREATE TABLE IF NOT EXISTS form_submissions (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(50) DEFAULT NULL,
    service VARCHAR(255) DEFAULT NULL,
    subservice VARCHAR(255) DEFAULT NULL,
    subject VARCHAR(255) DEFAULT NULL,
    message TEXT NOT NULL,
    source_page VARCHAR(500) DEFAULT NULL,
    form_location VARCHAR(100) DEFAULT NULL,
    utm_source VARCHAR(255) DEFAULT NULL,
    utm_medium VARCHAR(255) DEFAULT NULL,
    utm_campaign VARCHAR(255) DEFAULT NULL,
    utm_term VARCHAR(255) DEFAULT NULL,
    utm_content VARCHAR(255) DEFAULT NULL,
    gclid VARCHAR(255) DEFAULT NULL,
    fbclid VARCHAR(255) DEFAULT NULL,
    ip_address VARCHAR(45) DEFAULT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    INDEX idx_created_at (created_at)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- If you already ran an earlier version of this schema (before UTM/click-id
-- tracking was added), run these instead of the CREATE TABLE above:
--
-- ALTER TABLE form_submissions
--   ADD COLUMN subservice VARCHAR(255) DEFAULT NULL AFTER service,
--   ADD COLUMN form_location VARCHAR(100) DEFAULT NULL AFTER source_page,
--   ADD COLUMN utm_source VARCHAR(255) DEFAULT NULL AFTER form_location,
--   ADD COLUMN utm_medium VARCHAR(255) DEFAULT NULL AFTER utm_source,
--   ADD COLUMN utm_campaign VARCHAR(255) DEFAULT NULL AFTER utm_medium,
--   ADD COLUMN utm_term VARCHAR(255) DEFAULT NULL AFTER utm_campaign,
--   ADD COLUMN utm_content VARCHAR(255) DEFAULT NULL AFTER utm_term,
--   ADD COLUMN gclid VARCHAR(255) DEFAULT NULL AFTER utm_content,
--   ADD COLUMN fbclid VARCHAR(255) DEFAULT NULL AFTER gclid;
