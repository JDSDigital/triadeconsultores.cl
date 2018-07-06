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
            ['Relaciones Interpersonales –<br>Ancud', 1, 0, 0],
            ['Habilidades Parentales –<br>Curacaví', 1, 0, 0],
            ['Trabajo en Equipo –<br>Puerto Montt', 1, 0, 0],
            ['Plan Superación Profesional –<br>San Felipe', 1, 0, 0],
            ['Liderazgo y Comunicación –<br>RAV, Universidad de Chile', 1, 0, 0],
            ['Ferias Laborales', 1, 0, 0],
            ['Reclutamiento y Selección', 1, 0, 0],
        ]);

        $this->batchInsert('{{%xgallery_images}}', ['category_id', 'name', 'file', 'status', 'created_at', 'updated_at'], [
            ['1', '1', '01.jpg', 1, 0, 0],
            ['1', '2', '02.jpg', 1, 0, 0],
            ['1', '3', '03.jpg', 1, 0, 0],
            ['1', '4', '04.jpg', 1, 0, 0],
            ['1', '5', '05.jpg', 1, 0, 0],
            ['1', '6', '06.jpg', 1, 0, 0],
            ['1', '7', '07.jpg', 1, 0, 0],
            ['1', '8', '08.jpg', 1, 0, 0],
            ['1', '9', '09.jpg', 1, 0, 0],
            ['1', '10', '10.jpg', 1, 0, 0],

            ['2', '1', '01.jpg', 1, 0, 0],
            ['2', '2', '02.jpg', 1, 0, 0],
            ['2', '3', '03.jpg', 1, 0, 0],
            ['2', '4', '04.jpg', 1, 0, 0],

            ['3', '1', '01.jpg', 1, 0, 0],
            ['3', '2', '02.jpg', 1, 0, 0],
            ['3', '3', '03.jpg', 1, 0, 0],
            ['3', '4', '04.jpg', 1, 0, 0],
            ['3', '5', '05.jpg', 1, 0, 0],
            ['3', '6', '06.jpg', 1, 0, 0],
            ['3', '7', '07.jpg', 1, 0, 0],
            ['3', '8', '08.jpg', 1, 0, 0],
            ['3', '9', '09.jpg', 1, 0, 0],
            ['3', '10', '10.jpg', 1, 0, 0],
            ['3', '11', '11.jpg', 1, 0, 0],
            ['3', '12', '12.jpg', 1, 0, 0],
            ['3', '13', '13.jpg', 1, 0, 0],
            ['3', '14', '14.jpg', 1, 0, 0],
            ['3', '15', '15.jpg', 1, 0, 0],

            ['4', '1', '01.jpg', 1, 0, 0],
            ['4', '2', '02.jpg', 1, 0, 0],
            ['4', '3', '03.jpg', 1, 0, 0],
            ['4', '4', '04.jpg', 1, 0, 0],
            ['4', '5', '05.jpg', 1, 0, 0],

            ['5', '1', '01.jpg', 1, 0, 0],
            ['5', '2', '02.jpg', 1, 0, 0],
            ['5', '3', '03.jpg', 1, 0, 0],
            ['5', '4', '04.jpg', 1, 0, 0],
            ['5', '5', '05.jpg', 1, 0, 0],

            ['6', '1', '01.jpg', 1, 0, 0],
            ['6', '2', '02.jpg', 1, 0, 0],
            ['6', '3', '03.jpg', 1, 0, 0],
            ['6', '4', '04.jpg', 1, 0, 0],

            ['7', '1', '01.jpg', 1, 0, 0],
            ['7', '2', '02.jpg', 1, 0, 0],
            ['7', '3', '03.jpg', 1, 0, 0],
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
