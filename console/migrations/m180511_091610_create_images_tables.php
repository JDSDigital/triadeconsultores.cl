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
