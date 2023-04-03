<?php

use yii\db\Migration;

/**
 * Class m230403_203317_seed_pais_table
 */
class m230403_203317_seed_pais_table extends Migration
{
    private $arrCountry = [
            [
                'codigo' => 'BR',
                'nome' => 'Brasil',
                'populacao' => 205722000
            ],
            [
                'codigo' => 'CA',
                'nome' => 'Canadá',
                'populacao' => 35985751
            ],
            [
                'codigo' => 'CN',
                'nome' => 'China',
                'populacao' => 1375210000
            ],
            [
                'codigo' => 'DE',
                'nome' => 'Alemanha',
                'populacao' => 81459000
            ],
            [
                'codigo' => 'FR',
                'nome' => 'França',
                'populacao' => 64513242
            ],
            [
                'codigo' => 'Reino Unido',
                'nome' => 'GB',
                'populacao' => 65097000
            ],
            [
                'codigo' => 'RU',
                'nome' => 'Rússia',
                'populacao' => 146519759
            ],
            [
                'codigo' => 'IN',
                'nome' => 'Índia',
                'populacao' => 1285400000
            ],
            [
                'codigo' => 'US',
                'nome' => 'Estados Unidos',
                'populacao' => 322976000
            ]
    ];

    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insertData();
    }

    private function insertData()
    {
        foreach ($this->arrCountry as $country) {
            $this->insert(
                "pais",
                $country
            );
        }
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230403_203317_seed_pais_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230403_203317_seed_pais_table cannot be reverted.\n";

        return false;
    }
    */
}
