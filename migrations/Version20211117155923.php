<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211117155923 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ticket DROP FOREIGN KEY ticket_ibfk_1');
        $this->addSql('ALTER TABLE ticket CHANGE Client_id Client_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE ticket ADD CONSTRAINT FK_97A0ADA39B1AEB82 FOREIGN KEY (Client_id) REFERENCES user (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ticket DROP FOREIGN KEY FK_97A0ADA39B1AEB82');
        $this->addSql('ALTER TABLE ticket CHANGE Client_id Client_id INT NOT NULL');
        $this->addSql('ALTER TABLE ticket ADD CONSTRAINT ticket_ibfk_1 FOREIGN KEY (Client_id) REFERENCES user (id) ON UPDATE CASCADE ON DELETE CASCADE');
    }
}
