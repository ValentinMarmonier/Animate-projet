<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180115155038 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE contact (id INT AUTO_INCREMENT NOT NULL, email LONGTEXT NOT NULL, nom LONGTEXT NOT NULL, message LONGTEXT NOT NULL, date_message LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE kits ADD imagefiche LONGTEXT NOT NULL');
        $this->addSql('ALTER TABLE pictogrammes ADD imagefiche LONGTEXT NOT NULL');
        $this->addSql('ALTER TABLE cibles ADD video LONGTEXT NOT NULL, ADD temoignage LONGTEXT NOT NULL');
        $this->addSql('ALTER TABLE user_admin CHANGE email pseudo VARCHAR(500) NOT NULL');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE contact');
        $this->addSql('ALTER TABLE cibles DROP video, DROP temoignage');
        $this->addSql('ALTER TABLE kits DROP imagefiche');
        $this->addSql('ALTER TABLE pictogrammes DROP imagefiche');
        $this->addSql('ALTER TABLE user_admin CHANGE pseudo email VARCHAR(500) NOT NULL COLLATE utf8_unicode_ci');
    }
}
