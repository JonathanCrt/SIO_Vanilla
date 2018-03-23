<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180321170915 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE entreprise (id_entreprise INT AUTO_INCREMENT NOT NULL, nom_entreprise VARCHAR(255) NOT NULL, ville_entreprise VARCHAR(255) NOT NULL, cp_entreprise VARCHAR(255) NOT NULL, adressse_entreprise VARCHAR(255) NOT NULL, mail_entreprise VARCHAR(255) NOT NULL, tel_entreprise VARCHAR(255) NOT NULL, activite_entreprise VARCHAR(255) NOT NULL, active TINYINT(1) NOT NULL, PRIMARY KEY(id_entreprise)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE stage (id_stage INT AUTO_INCREMENT NOT NULL, date_stage DATE NOT NULL, PRIMARY KEY(id_stage)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tuteur (id_tuteur INT AUTO_INCREMENT NOT NULL, nom_tuteur VARCHAR(255) NOT NULL, prenom_tuteur VARCHAR(255) NOT NULL, mail_tuteur VARCHAR(255) NOT NULL, tel_tuteur VARCHAR(255) NOT NULL, PRIMARY KEY(id_tuteur)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id_user INT AUTO_INCREMENT NOT NULL, nom_user VARCHAR(255) NOT NULL, prenom_user VARCHAR(255) NOT NULL, annee_scolaire VARCHAR(255) NOT NULL, login VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, role VARCHAR(255) NOT NULL, classe_user VARCHAR(255) NOT NULL, present TINYINT(1) NOT NULL, PRIMARY KEY(id_user)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE entreprise');
        $this->addSql('DROP TABLE stage');
        $this->addSql('DROP TABLE tuteur');
        $this->addSql('DROP TABLE user');
    }
}
