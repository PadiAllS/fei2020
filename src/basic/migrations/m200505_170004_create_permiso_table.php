<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%permiso}}`.
 */
class m200505_170004_create_permiso_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%permiso}}', [
            'id' => $this->primaryKey(),
            'descripcion' => $this->string(100),
            'if_staff' => $this->boolean(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%permiso}}');
    }
}
