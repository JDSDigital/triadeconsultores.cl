<?php

use yii\db\Migration;

/**
 * Handles the creation of table `images`.
 */
class m180511_091610_create_images_tables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
          // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
          $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        // Creates image categories table
        $this->createTable('xgallery_categories', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),

            'status' => $this->smallInteger()->notNull()->defaultValue(1),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);

        // Creates images table
        $this->createTable('xgallery_images', [
            'id' => $this->primaryKey(),
            'category_id' => $this->integer()->notNull(),
            'name' => $this->string(255)->notNull(),
            'file' => $this->string(255)->notNull(),

            'status' => $this->smallInteger()->notNull()->defaultValue(1),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);

        // xgallery_images table indexes
        $this->createIndex('idx-xgallery_images-category_id', 'xgallery_images', 'category_id');

        // xgallery_images foreign keys
        $this->addForeignKey('fk_xgallery_images-xgallery_categories', 'xgallery_images', 'category_id', 'xgallery_categories', 'id', 'CASCADE', 'CASCADE');

        $this->batchInsert('{{%xgallery_categories}}', ['name', 'status', 'created_at', 'updated_at'], [
            ['Relaciones Interpersonales – Ancud', 1, 0, 0],
            ['Habilidades Parentales – Curacaví', 1, 0, 0],
            ['Trabajo en Equipo – Puerto Montt', 1, 0, 0],
            ['Plan Superación Profesional – San Felipe', 1, 0, 0],
            ['Liderazgo y Comunicación – RAV, Universidad de Chile', 1, 0, 0],
            ['Abuso Sexual en Menores, CHCC - Angol', 1, 0, 0],
            ['Autocuidado Educativo- Municipalidad de Paine', 1, 0, 0],
            ['Espectro del Transtorno Autista - Quinta de Tilcoco', 1, 0, 0],
            ['Ferias Laborales', 1, 0, 0],
            ['Reclutamiento y Selección', 1, 0, 0],
        ]);

        $this->batchInsert('{{%xgallery_images}}', ['category_id', 'name', 'file', 'status', 'created_at', 'updated_at'], [
            ['1', '1', '01.jpg', 1, 0, 0],
            ['1', '2', '02.jpg', 1, 0, 0],
            ['1', '3', '03.jpg', 1, 0, 0],

            ['2', '1', '01.jpg', 1, 0, 0],
            ['2', '2', '02.jpg', 1, 0, 0],
            ['2', '3', '03.jpg', 1, 0, 0],

            ['3', '1', '01.jpg', 1, 0, 0],
            ['3', '2', '02.jpg', 1, 0, 0],
            ['3', '3', '03.jpg', 1, 0, 0],

            ['4', '1', '01.jpg', 1, 0, 0],
            ['4', '2', '02.jpg', 1, 0, 0],
            ['4', '3', '03.jpg', 1, 0, 0],

            ['5', '1', '01.jpg', 1, 0, 0],
            ['5', '2', '02.jpg', 1, 0, 0],
            ['5', '3', '03.jpg', 1, 0, 0],

            ['6', '1', '01.jpg', 1, 0, 0],
            ['6', '2', '02.jpg', 1, 0, 0],
            ['6', '3', '03.jpg', 1, 0, 0],

            ['7', '1', '01.jpg', 1, 0, 0],
            ['7', '2', '02.jpg', 1, 0, 0],
            ['7', '3', '03.jpg', 1, 0, 0],

            ['8', '1', '01.jpg', 1, 0, 0],
            ['8', '2', '02.jpg', 1, 0, 0],

            ['9', 'Feria Independencia', '01.jpg', 1, 0, 0],
            ['9', 'Feria Peñalolen', '02.jpg', 1, 0, 0],
            ['9', 'Feria Puente Alto', '03.jpg', 1, 0, 0],
            ['9', 'Mini Feria Independencia', '04.jpg', 1, 0, 0],

            ['10', '1', '01.jpg', 1, 0, 0],
            ['10', '2', '02.jpg', 1, 0, 0],
            ['10', '3', '03.jpg', 1, 0, 0],
            ['10', '4', '04.jpg', 1, 0, 0],
            ['10', '5', '05.jpg', 1, 0, 0],
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops xgallery_images foreign keys
        $this->dropForeignKey('fk_xgallery_images-xgallery_categories', 'xgallery_images');

        // drops xgallery_images table indexes
        $this->dropIndex('idx-xgallery_images-category_id', 'xgallery_images');

        // drops tables
        $this->dropTable('xgallery_images');
        $this->dropTable('xgallery_categories');
    }
}
