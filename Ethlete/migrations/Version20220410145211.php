<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220410145211 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE affectation_formateur DROP FOREIGN KEY fk_reponse');
        $this->addSql('ALTER TABLE affectation_formateur DROP FOREIGN KEY fk_formation');
        $this->addSql('ALTER TABLE affectation_formateur DROP FOREIGN KEY fk_formateur11');
        $this->addSql('ALTER TABLE affectation_formateur CHANGE formateur_id formateur_id INT DEFAULT NULL, CHANGE formation_id formation_id INT DEFAULT NULL, CHANGE reponse reponse INT DEFAULT NULL');
        $this->addSql('ALTER TABLE affectation_formateur ADD CONSTRAINT FK_52FD03F8155D8F51 FOREIGN KEY (formateur_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE affectation_formateur ADD CONSTRAINT FK_52FD03F85FB6DEC7 FOREIGN KEY (reponse) REFERENCES reponse (id_reponse)');
        $this->addSql('ALTER TABLE affectation_formateur ADD CONSTRAINT FK_52FD03F85200282E FOREIGN KEY (formation_id) REFERENCES formation (id_formation)');
        $this->addSql('ALTER TABLE article DROP FOREIGN KEY fk_art_us');
        $this->addSql('ALTER TABLE article CHANGE idUser idUser INT DEFAULT NULL');
        $this->addSql('ALTER TABLE article ADD CONSTRAINT FK_23A0E66FE6E88D7 FOREIGN KEY (idUser) REFERENCES user (id)');
        $this->addSql('ALTER TABLE avis DROP FOREIGN KEY fk_user');
        $this->addSql('ALTER TABLE avis CHANGE id_user id_user INT DEFAULT NULL');
        $this->addSql('ALTER TABLE avis ADD CONSTRAINT FK_8F91ABF06B3CA4B FOREIGN KEY (id_user) REFERENCES user (id)');
        $this->addSql('ALTER TABLE billets DROP FOREIGN KEY fk_billet_event');
        $this->addSql('ALTER TABLE billets CHANGE id_event id_event INT DEFAULT NULL');
        $this->addSql('ALTER TABLE billets ADD CONSTRAINT FK_4FCF9B68D52B4B97 FOREIGN KEY (id_event) REFERENCES evenement (id_event)');
        $this->addSql('ALTER TABLE commande DROP FOREIGN KEY fk_commande');
        $this->addSql('ALTER TABLE commande CHANGE idp idp INT DEFAULT NULL');
        $this->addSql('ALTER TABLE commande ADD CONSTRAINT FK_6EEAA67DE9D3F622 FOREIGN KEY (idp) REFERENCES produit (idp)');
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY fk_part');
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY fk_form');
        $this->addSql('ALTER TABLE commentaire CHANGE id_formation id_formation INT DEFAULT NULL, CHANGE id_participant id_participant INT DEFAULT NULL');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BCC0759D98 FOREIGN KEY (id_formation) REFERENCES formation (id_formation)');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BCCF8DA6E6 FOREIGN KEY (id_participant) REFERENCES user (id)');
        $this->addSql('ALTER TABLE equipe DROP FOREIGN KEY fk_Responsable_eq');
        $this->addSql('ALTER TABLE equipe ADD CONSTRAINT FK_2449BA154A40C0F0 FOREIGN KEY (id_responsable) REFERENCES user (id)');
        $this->addSql('ALTER TABLE evenement DROP FOREIGN KEY fk_intervenantss');
        $this->addSql('ALTER TABLE evenement DROP FOREIGN KEY fk_formationn');
        $this->addSql('ALTER TABLE evenement DROP FOREIGN KEY fk_comp');
        $this->addSql('ALTER TABLE evenement ADD CONSTRAINT FK_B26681ED0A8E46F FOREIGN KEY (id_compet) REFERENCES competition (id_competition)');
        $this->addSql('ALTER TABLE evenement ADD CONSTRAINT FK_B26681E92056C5F FOREIGN KEY (id_inter) REFERENCES intervenant (id_inter)');
        $this->addSql('ALTER TABLE evenement ADD CONSTRAINT FK_B26681EC0759D98 FOREIGN KEY (id_formation) REFERENCES formation (id_formation)');
        $this->addSql('ALTER TABLE fournisseur DROP FOREIGN KEY fk_fournisseur');
        $this->addSql('ALTER TABLE fournisseur CHANGE idp idp INT DEFAULT NULL');
        $this->addSql('ALTER TABLE fournisseur ADD CONSTRAINT FK_369ECA32E9D3F622 FOREIGN KEY (idp) REFERENCES produit (idp)');
        $this->addSql('ALTER TABLE invitation DROP FOREIGN KEY fk_joueur');
        $this->addSql('ALTER TABLE invitation DROP FOREIGN KEY fk_equipe');
        $this->addSql('ALTER TABLE invitation ADD CONSTRAINT FK_F11D61A2BE2C35B0 FOREIGN KEY (id_eq) REFERENCES equipe (id_equipe)');
        $this->addSql('ALTER TABLE invitation ADD CONSTRAINT FK_F11D61A2DB461C28 FOREIGN KEY (id_joueur) REFERENCES user (id)');
        $this->addSql('ALTER TABLE journe DROP FOREIGN KEY fk_idcj');
        $this->addSql('ALTER TABLE journe CHANGE id_competition id_competition INT DEFAULT NULL');
        $this->addSql('ALTER TABLE journe ADD CONSTRAINT FK_CEFD526DAD18E146 FOREIGN KEY (id_competition) REFERENCES competition (id_competition)');
        $this->addSql('ALTER TABLE `match` DROP FOREIGN KEY fk_journee');
        $this->addSql('ALTER TABLE `match` CHANGE id_journe id_journe INT DEFAULT NULL');
        $this->addSql('ALTER TABLE `match` ADD CONSTRAINT FK_7A5BC505E8CAE780 FOREIGN KEY (id_journe) REFERENCES journe (id_journe)');
        $this->addSql('ALTER TABLE participation DROP FOREIGN KEY fk_participant');
        $this->addSql('ALTER TABLE participation DROP FOREIGN KEY fk_formation_part');
        $this->addSql('ALTER TABLE participation CHANGE id_participant id_participant INT DEFAULT NULL, CHANGE formation_id formation_id INT DEFAULT NULL, CHANGE date_participation date_participation DATE DEFAULT \'current_timestamp()\' NOT NULL');
        $this->addSql('ALTER TABLE participation ADD CONSTRAINT FK_AB55E24F5200282E FOREIGN KEY (formation_id) REFERENCES formation (id_formation)');
        $this->addSql('ALTER TABLE participation ADD CONSTRAINT FK_AB55E24FCF8DA6E6 FOREIGN KEY (id_participant) REFERENCES user (id)');
        $this->addSql('ALTER TABLE produit DROP FOREIGN KEY fk_produit');
        $this->addSql('ALTER TABLE produit CHANGE idcateg idcateg INT DEFAULT NULL');
        $this->addSql('ALTER TABLE produit ADD CONSTRAINT FK_29A5EC27D58BAD6A FOREIGN KEY (idcateg) REFERENCES categorie (idcateg)');
        $this->addSql('ALTER TABLE reclamation DROP FOREIGN KEY fk_user_rec');
        $this->addSql('ALTER TABLE reclamation DROP FOREIGN KEY fk_rason1');
        $this->addSql('ALTER TABLE reclamation CHANGE id id INT DEFAULT NULL, CHANGE idRaison idRaison INT DEFAULT NULL');
        $this->addSql('ALTER TABLE reclamation ADD CONSTRAINT FK_CE606404689DAEB9 FOREIGN KEY (idRaison) REFERENCES raison (idRaison)');
        $this->addSql('ALTER TABLE reclamation ADD CONSTRAINT FK_CE606404BF396750 FOREIGN KEY (id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE review DROP FOREIGN KEY id_ur');
        $this->addSql('ALTER TABLE review DROP FOREIGN KEY fk_rm');
        $this->addSql('ALTER TABLE review CHANGE id id INT DEFAULT NULL, CHANGE id_match id_match INT DEFAULT NULL');
        $this->addSql('ALTER TABLE review ADD CONSTRAINT FK_794381C694DE8435 FOREIGN KEY (id_match) REFERENCES `match` (id_match)');
        $this->addSql('ALTER TABLE review ADD CONSTRAINT FK_794381C6BF396750 FOREIGN KEY (id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE user CHANGE genre genre VARCHAR(30) DEFAULT \'NULL\'');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE affectation_formateur DROP FOREIGN KEY FK_52FD03F8155D8F51');
        $this->addSql('ALTER TABLE affectation_formateur DROP FOREIGN KEY FK_52FD03F85FB6DEC7');
        $this->addSql('ALTER TABLE affectation_formateur DROP FOREIGN KEY FK_52FD03F85200282E');
        $this->addSql('ALTER TABLE affectation_formateur CHANGE formateur_id formateur_id INT NOT NULL, CHANGE reponse reponse INT NOT NULL, CHANGE formation_id formation_id INT NOT NULL');
        $this->addSql('ALTER TABLE affectation_formateur ADD CONSTRAINT fk_reponse FOREIGN KEY (reponse) REFERENCES reponse (id_reponse) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE affectation_formateur ADD CONSTRAINT fk_formation FOREIGN KEY (formation_id) REFERENCES formation (id_formation) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE affectation_formateur ADD CONSTRAINT fk_formateur11 FOREIGN KEY (formateur_id) REFERENCES user (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE article DROP FOREIGN KEY FK_23A0E66FE6E88D7');
        $this->addSql('ALTER TABLE article CHANGE idUser idUser INT NOT NULL');
        $this->addSql('ALTER TABLE article ADD CONSTRAINT fk_art_us FOREIGN KEY (idUser) REFERENCES user (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE avis DROP FOREIGN KEY FK_8F91ABF06B3CA4B');
        $this->addSql('ALTER TABLE avis CHANGE id_user id_user INT NOT NULL');
        $this->addSql('ALTER TABLE avis ADD CONSTRAINT fk_user FOREIGN KEY (id_user) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE billets DROP FOREIGN KEY FK_4FCF9B68D52B4B97');
        $this->addSql('ALTER TABLE billets CHANGE id_event id_event INT NOT NULL');
        $this->addSql('ALTER TABLE billets ADD CONSTRAINT fk_billet_event FOREIGN KEY (id_event) REFERENCES evenement (id_event) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE commande DROP FOREIGN KEY FK_6EEAA67DE9D3F622');
        $this->addSql('ALTER TABLE commande CHANGE idp idp INT NOT NULL');
        $this->addSql('ALTER TABLE commande ADD CONSTRAINT fk_commande FOREIGN KEY (idp) REFERENCES produit (idp) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BCC0759D98');
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BCCF8DA6E6');
        $this->addSql('ALTER TABLE commentaire CHANGE id_formation id_formation INT NOT NULL, CHANGE id_participant id_participant INT NOT NULL');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT fk_part FOREIGN KEY (id_participant) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT fk_form FOREIGN KEY (id_formation) REFERENCES formation (id_formation) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE equipe DROP FOREIGN KEY FK_2449BA154A40C0F0');
        $this->addSql('ALTER TABLE equipe ADD CONSTRAINT fk_Responsable_eq FOREIGN KEY (id_responsable) REFERENCES user (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE evenement DROP FOREIGN KEY FK_B26681ED0A8E46F');
        $this->addSql('ALTER TABLE evenement DROP FOREIGN KEY FK_B26681E92056C5F');
        $this->addSql('ALTER TABLE evenement DROP FOREIGN KEY FK_B26681EC0759D98');
        $this->addSql('ALTER TABLE evenement ADD CONSTRAINT fk_intervenantss FOREIGN KEY (id_inter) REFERENCES intervenant (id_inter) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE evenement ADD CONSTRAINT fk_formationn FOREIGN KEY (id_formation) REFERENCES formation (id_formation) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE evenement ADD CONSTRAINT fk_comp FOREIGN KEY (id_compet) REFERENCES competition (id_competition) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE fournisseur DROP FOREIGN KEY FK_369ECA32E9D3F622');
        $this->addSql('ALTER TABLE fournisseur CHANGE idp idp INT NOT NULL');
        $this->addSql('ALTER TABLE fournisseur ADD CONSTRAINT fk_fournisseur FOREIGN KEY (idp) REFERENCES produit (idp) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE invitation DROP FOREIGN KEY FK_F11D61A2BE2C35B0');
        $this->addSql('ALTER TABLE invitation DROP FOREIGN KEY FK_F11D61A2DB461C28');
        $this->addSql('ALTER TABLE invitation ADD CONSTRAINT fk_joueur FOREIGN KEY (id_joueur) REFERENCES user (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE invitation ADD CONSTRAINT fk_equipe FOREIGN KEY (id_eq) REFERENCES equipe (id_equipe) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE journe DROP FOREIGN KEY FK_CEFD526DAD18E146');
        $this->addSql('ALTER TABLE journe CHANGE id_competition id_competition INT NOT NULL');
        $this->addSql('ALTER TABLE journe ADD CONSTRAINT fk_idcj FOREIGN KEY (id_competition) REFERENCES competition (id_competition) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE `match` DROP FOREIGN KEY FK_7A5BC505E8CAE780');
        $this->addSql('ALTER TABLE `match` CHANGE id_journe id_journe INT NOT NULL');
        $this->addSql('ALTER TABLE `match` ADD CONSTRAINT fk_journee FOREIGN KEY (id_journe) REFERENCES journe (id_journe) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE participation DROP FOREIGN KEY FK_AB55E24F5200282E');
        $this->addSql('ALTER TABLE participation DROP FOREIGN KEY FK_AB55E24FCF8DA6E6');
        $this->addSql('ALTER TABLE participation CHANGE formation_id formation_id INT NOT NULL, CHANGE id_participant id_participant INT NOT NULL, CHANGE date_participation date_participation DATE DEFAULT \'CURRENT_TIMESTAMP\' NOT NULL');
        $this->addSql('ALTER TABLE participation ADD CONSTRAINT fk_participant FOREIGN KEY (id_participant) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE participation ADD CONSTRAINT fk_formation_part FOREIGN KEY (formation_id) REFERENCES formation (id_formation) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE produit DROP FOREIGN KEY FK_29A5EC27D58BAD6A');
        $this->addSql('ALTER TABLE produit CHANGE idcateg idcateg INT NOT NULL');
        $this->addSql('ALTER TABLE produit ADD CONSTRAINT fk_produit FOREIGN KEY (idcateg) REFERENCES categorie (idcateg) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reclamation DROP FOREIGN KEY FK_CE606404689DAEB9');
        $this->addSql('ALTER TABLE reclamation DROP FOREIGN KEY FK_CE606404BF396750');
        $this->addSql('ALTER TABLE reclamation CHANGE id id INT NOT NULL, CHANGE idRaison idRaison INT NOT NULL');
        $this->addSql('ALTER TABLE reclamation ADD CONSTRAINT fk_user_rec FOREIGN KEY (id) REFERENCES user (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reclamation ADD CONSTRAINT fk_rason1 FOREIGN KEY (idRaison) REFERENCES raison (idRaison) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE review DROP FOREIGN KEY FK_794381C694DE8435');
        $this->addSql('ALTER TABLE review DROP FOREIGN KEY FK_794381C6BF396750');
        $this->addSql('ALTER TABLE review CHANGE id_match id_match INT NOT NULL, CHANGE id id INT NOT NULL');
        $this->addSql('ALTER TABLE review ADD CONSTRAINT id_ur FOREIGN KEY (id) REFERENCES user (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE review ADD CONSTRAINT fk_rm FOREIGN KEY (id_match) REFERENCES `match` (id_match) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user CHANGE genre genre VARCHAR(30) DEFAULT NULL');
    }
}
