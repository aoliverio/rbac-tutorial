CREATE TABLE users (
    id int(11) AUTO_INCREMENT PRIMARY KEY,
    name varchar(255) NOT NULL,
    email varchar(255) DEFAULT NULL,
    username varchar(255) DEFAULT NULL,
    password varchar(255) DEFAULT NULL,
    is_blocked tinyint(1) DEFAULT NULL,
    created timestamp NULL DEFAULT NULL,
    modified datetime DEFAULT NULL
);

CREATE TABLE roles (
    id int(11) AUTO_INCREMENT PRIMARY KEY,
    name varchar(255) NOT NULL,
    description text,
    lft int(11) DEFAULT NULL,
    rgt int(11) DEFAULT NULL
);

CREATE TABLE users_roles (
    user_id int(11) NOT NULL,
    role_id int(11) NOT NULL,
    PRIMARY KEY (user_id, role_id),
    FOREIGN KEY user_key(user_id) REFERENCES users(id),
    FOREIGN KEY role_key(role_id) REFERENCES roles(id)
);

CREATE TABLE objects (
    id int(11) AUTO_INCREMENT PRIMARY KEY,
    name varchar(255) NOT NULL,
    plugin varchar(255) DEFAULT NULL,
    controller varchar(255) DEFAULT NULL,
    description text
);

CREATE TABLE operations (
    id int(11) AUTO_INCREMENT PRIMARY KEY,
    name varchar(255) NOT NULL,
    description text
);

CREATE TABLE permissions (
    id int(11) AUTO_INCREMENT PRIMARY KEY,
    object_id int(11) NOT NULL,
    operation_id int(11) NOT NULL,
    name varchar(255) NOT NULL,
    descption text,
    created timestamp NULL DEFAULT NULL,
    modified datetime DEFAULT NULL,
    FOREIGN KEY object_key (object_id) REFERENCES objects(id),
    FOREIGN KEY operation_key (operation_id) REFERENCES operations(id)
);

CREATE TABLE roles_permissions (
    role_id int(11) NOT NULL,
    permission_id int(11) NOT NULL,
    PRIMARY KEY (role_id, permission_id),
    FOREIGN KEY role_key(role_id) REFERENCES roles(id),
    FOREIGN KEY permission_key(permission_id) REFERENCES permissions(id)
);

CREATE TABLE audits (
    id int(11) AUTO_INCREMENT PRIMARY KEY,
    user_id int(11) NOT NULL,
    session_key varchar(255) DEFAULT NULL,
    ip_address varchar(255) DEFAULT NULL,
    request text,
    created timestamp NULL DEFAULT NULL,
    FOREIGN KEY user_key(user_id) REFERENCES users(id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE logon_errors (
    id int(11) AUTO_INCREMENT PRIMARY KEY,
    ip_address varchar(255) DEFAULT NULL,
    request text,
    username varchar(255) DEFAULT NULL,
    password varchar(255) DEFAULT NULL,
    created timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;