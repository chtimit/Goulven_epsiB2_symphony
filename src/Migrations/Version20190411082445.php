<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190411082445 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE dresseur (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_77EA2FC6E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE dresseur_pokemon (dresseur_id INT NOT NULL, pokemon_id INT NOT NULL, INDEX IDX_6F857270A1A01CBE (dresseur_id), INDEX IDX_6F8572702FE71C3E (pokemon_id), PRIMARY KEY(dresseur_id, pokemon_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE dresseur_pokemon ADD CONSTRAINT FK_6F857270A1A01CBE FOREIGN KEY (dresseur_id) REFERENCES dresseur (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE dresseur_pokemon ADD CONSTRAINT FK_6F8572702FE71C3E FOREIGN KEY (pokemon_id) REFERENCES pokemon (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE dresseur_pokemon DROP FOREIGN KEY FK_6F857270A1A01CBE');
        $this->addSql('DROP TABLE dresseur');
        $this->addSql('DROP TABLE dresseur_pokemon');
    }
}
