<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180330143704 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE entreprise (id INT AUTO_INCREMENT NOT NULL, nom_entreprise VARCHAR(255) NOT NULL, ville_entreprise VARCHAR(255) NOT NULL, cp_entreprise VARCHAR(255) NOT NULL, adressse_entreprise VARCHAR(255) NOT NULL, mail_entreprise VARCHAR(255) NOT NULL, tel_entreprise VARCHAR(255) NOT NULL, activite_entreprise VARCHAR(255) NOT NULL, active TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE stage (id INT AUTO_INCREMENT NOT NULL, tuteur_id INT DEFAULT NULL, users_id INT DEFAULT NULL, date_stage DATE NOT NULL, INDEX IDX_C27C936986EC68D8 (tuteur_id), INDEX IDX_C27C936967B3B43D (users_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tuteur (id INT AUTO_INCREMENT NOT NULL, entreprises_id INT DEFAULT NULL, nom_tuteur VARCHAR(255) NOT NULL, prenom_tuteur VARCHAR(255) NOT NULL, mail_tuteur VARCHAR(255) NOT NULL, tel_tuteur VARCHAR(255) NOT NULL, INDEX IDX_56412268A70A18EC (entreprises_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, nom_user VARCHAR(255) NOT NULL, prenom_user VARCHAR(255) NOT NULL, annee_scolaire VARCHAR(255) NOT NULL, login VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, role VARCHAR(255) NOT NULL, classe_user VARCHAR(255) NOT NULL, present TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE stage ADD CONSTRAINT FK_C27C936986EC68D8 FOREIGN KEY (tuteur_id) REFERENCES tuteur (id)');
        $this->addSql('ALTER TABLE stage ADD CONSTRAINT FK_C27C936967B3B43D FOREIGN KEY (users_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE tuteur ADD CONSTRAINT FK_56412268A70A18EC FOREIGN KEY (entreprises_id) REFERENCES entreprise (id)');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE tuteur DROP FOREIGN KEY FK_56412268A70A18EC');
        $this->addSql('ALTER TABLE stage DROP FOREIGN KEY FK_C27C936986EC68D8');
        $this->addSql('ALTER TABLE stage DROP FOREIGN KEY FK_C27C936967B3B43D');
        $this->addSql('DROP TABLE entreprise');
        $this->addSql('DROP TABLE stage');
        $this->addSql('DROP TABLE tuteur');
        $this->addSql('DROP TABLE user');
    }
}
