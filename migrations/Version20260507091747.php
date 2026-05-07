<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260507091747 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE event ADD slug VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE event ADD category VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE event ADD date VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE event ADD month VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE event ADD year VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE event ADD title VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE event ADD subtitle VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE event ADD location VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE event ADD city VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE event ADD description VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE event ADD status VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE event ADD featured VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE event ADD image VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE event DROP slug');
        $this->addSql('ALTER TABLE event DROP category');
        $this->addSql('ALTER TABLE event DROP date');
        $this->addSql('ALTER TABLE event DROP month');
        $this->addSql('ALTER TABLE event DROP year');
        $this->addSql('ALTER TABLE event DROP title');
        $this->addSql('ALTER TABLE event DROP subtitle');
        $this->addSql('ALTER TABLE event DROP location');
        $this->addSql('ALTER TABLE event DROP city');
        $this->addSql('ALTER TABLE event DROP description');
        $this->addSql('ALTER TABLE event DROP status');
        $this->addSql('ALTER TABLE event DROP featured');
        $this->addSql('ALTER TABLE event DROP image');
    }
}
