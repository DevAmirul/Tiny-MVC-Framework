<?php

class m001_initial {

    /**
     * Undocumented function
     *
     * @return void
     */
    public function up( $pdo ) {
        $sql = "CREATE TABLE user (
            id INT PRIMARY KEY AUTO_INCREMENT,
            fullname VARCHAR(255) NOT NULL,
            email VARCHAR(255) NOT NULL,
            password VARCHAR(255) NOT NULL,
            status TINYINT NOT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        ) ENGINE=INNODB;";

        $pdo->exec( $sql );
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function down( $pdo ) {
        $sql = "DROP TABLE user";
        $pdo->exec( $sql );
    }
}

// class name {
//     public $a;
//     function __construct( $var ) {
//         $this->a = $var;
//     }

//     function x() {
//         $this->b= 4;
//     }
// }
// class child extends name{
//     public $b;

// }