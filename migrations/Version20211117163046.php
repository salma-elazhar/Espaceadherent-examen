<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211117163046 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ticket DROP FOREIGN KEY FK_97A0ADA39B1AEB82');
        $this->addSql('DROP INDEX Client_id ON ticket');
        $this->addSql('ALTER TABLE ticket DROP Client_id, CHANGE titre titre VARCHAR(20) NOT NULL, CHANGE nom nom VARCHAR(20) NOT NULL, CHANGE description description VARCHAR(50) NOT NULL, CHANGE statut statut VARCHAR(10) NOT NULL, CHANGE date date DATE NOT NULL');
        $this->addSql('ALTER TABLE user DROP role, CHANGE mdp mdp VARCHAR(10) NOT NULL, CHANGE login login VARCHAR(10) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ticket ADD Client_id INT DEFAULT NULL, CHANGE titre titre VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE nom nom VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE description description VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE statut statut VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE date date DATETIME NOT NULL');
        $this->addSql('ALTER TABLE ticket ADD CONSTRAINT FK_97A0ADA39B1AEB82 FOREIGN KEY (Client_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX Client_id ON ticket (Client_id)');
        $this->addSql('ALTER TABLE user ADD role VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE login login VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE mdp mdp VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
