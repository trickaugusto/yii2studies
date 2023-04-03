<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%pais}}`.
 */
class m230403_203026_create_pais_table extends Migration
{

    // CREATE TABLE `pais` (
    //     `id` int PRIMARY KEY NOT NULL AUTO_INCREMENT,
    //     `codigo` CHAR(2) NOT NULL,
    //     `nome` CHAR(52) NOT NULL,
    //     `populacao` INT(11) NOT NULL DEFAULT '0'
    //   ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%pais}}', [
            'id' => $this->primaryKey(),
            'codigo' => $this->string(),
            'nome' => $this->string(),
            'populacao' => $this->bigInteger()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%pais}}');
    }
}
