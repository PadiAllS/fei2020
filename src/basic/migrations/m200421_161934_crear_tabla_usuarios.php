<?php

use yii\db\Migration;

/**
 * Class m200421_161934_crear_tabla_usuarios
 */
class m200421_161934_crear_tabla_usuarios extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('usuario', [
            'id' => $this->primaryKey(),
            'username' => $this->string()->notNull(),
            'nombre' => $this->text(),
            'apellido' => $this->text(),
            'edad' => $this->text(),
            
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('usuario');

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200421_161934_crear_tabla_usuarios cannot be reverted.\n";

        return false;
    }
    */
}
