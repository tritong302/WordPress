

CREATE TABLE wp_footer_links (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    url VARCHAR(255) NOT NULL,
    icon_class VARCHAR(255) DEFAULT NULL
);

INSERT INTO wp_footer_links (title, url, icon_class) VALUES
('Home', 'https://www.fiverr.com/share/qb8D02', 'fa fa-angle-double-right'),
('About', 'https://www.fiverr.com/share/qb8D02', 'fa fa-angle-double-right'),
('FAQ', 'https://www.fiverr.com/share/qb8D02', 'fa fa-angle-double-right'),
('Get Started', 'https://www.fiverr.com/share/qb8D02', 'fa fa-angle-double-right'),
('Videos', 'https://www.fiverr.com/share/qb8D02', 'fa fa-angle-double-right'),
('Imprint', 'https://www.sunlimetech.com', 'fa fa-angle-double-right');
"""
