<?php

use yii\db\Migration;

/**
 * Handles the creation of table `logos`.
 */
class m180511_091539_create_logos_table extends Migration
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

        // Creates logos categories table
        $this->createTable('xclients_categories', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),

            'status' => $this->smallInteger()->notNull()->defaultValue(1),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);

        // Creates logos table
        $this->createTable('xclients_logos', [
            'id' => $this->primaryKey(),
            'category_id' => $this->integer()->notNull(),
            'name' => $this->string(255)->notNull(),
            'url' => $this->string(255)->null(),
            'file' => $this->string(255)->notNull(),

            'status' => $this->smallInteger()->notNull()->defaultValue(1),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);

        // xclients_logos table indexes
        $this->createIndex('idx-xclients_logos-category_id', 'xclients_logos', 'category_id');

        // xclients_logos foreign keys
        $this->addForeignKey('fk_xclients_logos-xclients_categories', 'xclients_logos', 'category_id', 'xclients_categories', 'id', 'CASCADE', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
      // drops xclients_logos foreign keys
      $this->dropForeignKey('fk_xclients_logos-xclients_categories', 'xclients_logos');

      // drops xclients_logos table indexes
      $this->dropIndex('idx-xclients_logos-category_id', 'xclients_logos');

      // drops tables
      $this->dropTable('xclients_logos');
      $this->dropTable('xclients_categories');
    }
}
