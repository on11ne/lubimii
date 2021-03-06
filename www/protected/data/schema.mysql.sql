CREATE TABLE tbl_actions (
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR (255) NOT NULL,
    teaser TEXT,
    teaser_image VARCHAR (255),
    url VARCHAR(255) NOT NULL,
    is_popup TINYINT(1) NOT NULL,
    status enum('NOT_PUBLISHED','PUBLISHED','ARCHIVED') NOT NULL DEFAULT 'NOT_PUBLISHED',
    created TIMESTAMP NOT NULL,
    PRIMARY KEY (id)
);


CREATE TABLE tbl_products (
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR (255) NOT NULL,
    teaser TEXT,
    image VARCHAR (255),
    status enum('NOT_PUBLISHED','PUBLISHED') NOT NULL DEFAULT 'NOT_PUBLISHED',
    created TIMESTAMP NOT NULL
);

CREATE TABLE tbl_images (
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR (255) NOT NULL,
    teaser TEXT,
    image VARCHAR (255),
    news_id INTEGER ,
    created TIMESTAMP NOT NULL
);

CREATE TABLE tbl_videos (
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR (255) NOT NULL,
    teaser TEXT,
    url VARCHAR (255),
    news_id INTEGER ,
    created TIMESTAMP NOT NULL
);