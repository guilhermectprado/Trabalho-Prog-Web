<?php

namespace App;

use PDO;

/**
 *  Classe responsável por fazer a gestão da conexão com o banco.
 * Em função de não termos conseguido fazer uma edição do banco em outra ferramenta, fizemos uma 
 * inserção de valores de produtos controlada (checa a existência do valor antes de inseri-los) também nessa classe. 
 * 
 */
class Database
{
    static $con;
    

    static public function getConnection(): PDO
    {
        if (isset(self::$con)) return self::$con;

        self::$con = new PDO('sqlite:cospobre-db.sqlite');
        self::$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return self::$con;
    }
    
    static public function createSchema(): void
    {
        $con = self::getConnection();
        $con->exec('
            CREATE TABLE IF NOT EXISTS Usuarios (
                nome  TEXT,
                datanasc TEXT,
                endereco TEXT,
                cep TEXT,
                telefone TEXT,
                email TEXT PRIMARY KEY,
                senha TEXT,
                subscribe BOOLEAN
            )
        ');

        $con->exec('
            CREATE TABLE IF NOT EXISTS Produto (
                id INTEGER,
                nome TEXT,
                preco TEXT,
                categoria TEXT,
                tamanho TEXT,
                img TEXT 
            )
        ');

        $con->exec('
            CREATE TABLE IF NOT EXISTS Descricao (
                produto TEXT,
                material TEXT,
                cor TEXT,
                tt TEXT

            )
        ');
        
        $data = $con->prepare('
        select nome from Produto where nome ="Peruca Saber";
        
        ');
        $data->execute();
        $dt =$data->fetch();
        
        if (!$dt ){
            $con->exec('
            INSERT OR REPLACE INTO Produto (nome, preco, categoria, tamanho, img) 
            VALUES ("Peruca Saber", "R$ 60,00", "Peruca", "P", "/Cospobre MVC/public/images/PerucaSaber.svg");
            INSERT OR REPLACE INTO Descricao (produto, material, cor, tt) 
            VALUES ("Peruca Saber",  "Fibras sintéticas de alta qualidade.", "como mostra na imagem.", "10cm / Corte lateral: 27cm");
            ');
        }
        $data = $con->prepare('
        select nome from Produto where nome ="Peruca Yamamota Kenshin";
        
        ');
        $data->execute();
        $dt =$data->fetch();
        if (!$dt ){
            $con->exec('
            INSERT INTO Produto (nome, preco, categoria, tamanho, img) 
            VALUES ("Peruca Yamamota Kenshin", "R$125,00", "Peruca", "P", "/Cospobre MVC/public/images/PerucaYamamotaKenshin.svg");
            INSERT OR REPLACE INTO Descricao (produto, material, cor, tt) 
            VALUES ("Peruca Yamamota Kenshin" , "Fibras sintéticas de alta qualidade.", "como mostra na imagem.", "60cm / Corte lateral: 27cm");
            ');
        }

        $data = $con->prepare('
        select nome from Produto where nome ="Peruca Agatsuma Zenitsu";
        
        ');
        $data->execute();
        $dt =$data->fetch();
        if (!$dt ){
            $con->exec('
            INSERT INTO Produto (nome, preco, categoria, tamanho, img) 
            VALUES ("Peruca Agatsuma Zenitsu", "R$155,00", "Peruca", "P", "/Cospobre MVC/public/images/PerucaAgatsumaZenitsu.svg");
            INSERT OR REPLACE INTO Descricao (produto, material, cor, tt) 
            VALUES ("Peruca Agatsuma Zenitsu", "Fibras sintéticas de alta qualidade.", "como mostra na imagem.", "40cm / Corte lateral: Repicado");
            ');
        }
        $data = $con->prepare('
        select nome from Produto where nome ="Peruca Yomotsuki";
        
        ');
        $data->execute();
        $dt =$data->fetch();
        if (!$dt ){
            $con->exec('
            INSERT INTO Produto (nome, preco, categoria, tamanho, img) 
            VALUES ("Peruca Yomotsuki", "R$132,00", "Peruca", "P", "/Cospobre MVC/public/images/PerucaYomotsukiRuna.svg");
            INSERT OR REPLACE INTO Descricao (produto, material, cor, tt) 
            VALUES ("Peruca Yomotsuki", "Fibras sintéticas de alta qualidade.", "como mostra na imagem.", "60cm / Corte lateral: 30 cm");
            ');
        }

        $data = $con->prepare('
        select nome from Produto where nome ="Peruca Mauiua Tatsuko";
        
        ');
        $data->execute();
        $dt =$data->fetch();
        if (!$dt ){
            $con->exec('
            INSERT INTO Produto (nome, preco, categoria, tamanho, img) 
            VALUES ("Peruca Mauiua Tatsuko", "R$115,00", "Peruca", "P", "/Cospobre MVC/public/images/PerucaMauiuaTatsusuko.svg");
            INSERT OR REPLACE INTO Descricao (produto, material, cor, tt) 
            VALUES ("Peruca Mauiua Tatsuko", "Fibras sintéticas de alta qualidade.", "como mostra na imagem.", "120cm / Corte lateral: 27 cm");
            ');
        }
       

        $data = $con->prepare('
        select nome from Produto where nome ="Peruca Asuna Homura";
        
        ');
        $data->execute();
        $dt =$data->fetch();
        if (!$dt ){
            $con->exec('
            INSERT INTO Produto (nome, preco, categoria, tamanho, img) 
            VALUES ("Peruca Asuna Homura", "R$ 90,00", "Peruca", "P", "/Cospobre MVC/public/images/PerucaAsunaHomura.svg");
            INSERT OR REPLACE INTO Descricao (produto, material, cor, tt) 
            VALUES ("Peruca Asuna Homura", "Fibras sintéticas de alta qualidade.", "como mostra na imagem.", "160cm / Corte lateral: 27 cm");
            
            ');
        }
       
        $data = $con->prepare('
        select nome from Produto where nome ="Peruca Arashi Henra";
        
        ');
        $data->execute();
        $dt =$data->fetch();
        if (!$dt ){
            $con->exec('
            INSERT INTO Produto (nome, preco, categoria, tamanho, img) 
            VALUES ("Peruca Arashi Henra", "R$ 98,00", "Peruca", "P", "/Cospobre MVC/public/images/PerucaArashiHenra.svg");
            INSERT OR REPLACE INTO Descricao (produto, material, cor, tt) 
            VALUES ("Peruca Arashi Henra", "Fibras sintéticas de alta qualidade.", "como mostra na imagem.", "60cm / Corte lateral: 40 cm");
            
            ');
        }
        $data = $con->prepare('
        select nome from Produto where nome ="Peruca Haya Konbuka";
        
        ');
        $data->execute();
        $dt =$data->fetch();
        if (!$dt ){
            $con->exec('
            INSERT INTO Produto (nome, preco, categoria, tamanho, img) 
            VALUES ("Peruca Haya Konbuka", "R$120,00", "Peruca", "P", "/Cospobre MVC/public/images/PerucaHayaKonbuka.svg");
            INSERT OR REPLACE INTO Descricao (produto, material, cor, tt) 
            VALUES ("Peruca Haya Konbuka", "Fibras sintéticas de alta qualidade.", "como mostra na imagem.", "100cm / Corte lateral: 40 cm");
           
            ');
        }

        $data = $con->prepare('
        select nome from Produto where nome ="Peruca Kacari Nyoa";
        
        ');
        $data->execute();
        $dt =$data->fetch();
        if (!$dt ){
            $con->exec('
            INSERT INTO Produto (nome, preco, categoria, tamanho, img) 
            VALUES ("Peruca Kacari Nyoa", "R$ 90,00", "Peruca", "P", "/Cospobre MVC/public/images/PerucaKacariNyoa.svg");
            INSERT OR REPLACE INTO Descricao (produto, material, cor, tt) 
            VALUES ("Peruca Kacari Nyoa", "Fibras sintéticas de alta qualidade.", "como mostra na imagem.", "60cm / Corte lateral: 20 cm");
            ');
        }

        $data = $con->prepare('
        select nome from Produto where nome ="Peruca Megumi";
        
        ');
        $data->execute();
        $dt =$data->fetch();
        if (!$dt ){
            $con->exec('
            INSERT INTO Produto (nome, preco, categoria, tamanho, img) 
            VALUES ("Peruca Megumi", "R$ 60,00", "Peruca", "P", "/Cospobre MVC/public/images/PerucaMegumi.svg");
            INSERT OR REPLACE INTO Descricao (produto, material, cor, tt) 
            VALUES ("Peruca Megumi", "Fibras sintéticas de alta qualidade.", "como mostra na imagem.", "30cm / Repicado");
            ');
        }
        $data = $con->prepare('
        select nome from Produto where nome ="Peruca Itadori Yuji";
        
        ');
        $data->execute();
        $dt =$data->fetch();
        if (!$dt ){
            $con->exec('
            INSERT INTO Produto (nome, preco, categoria, tamanho, img) 
            VALUES ("Peruca Itadori Yuji", "R$ 60,00", "Peruca", "P", "/Cospobre MVC/public/images/PerucaItadoriYuji.svg");
            INSERT OR REPLACE INTO Descricao (produto, material, cor, tt) 
            VALUES ("Peruca Itadori Yuji", "Fibras sintéticas de alta qualidade.", "como mostra na imagem.", "20cm / Repicado");
            ');
        }
        
        $data = $con->prepare('
        select nome from Produto where nome ="Peruca Yu Nishin";
        
        ');
        $data->execute();
        $dt =$data->fetch();
        if (!$dt ){
            $con->exec('
            INSERT INTO Produto (nome, preco, categoria, tamanho, img) 
            VALUES ("Peruca Yu Nishin", "R$ 45,00", "Peruca", "P", "/Cospobre MVC/public/images/PerucaYuNishin.svg");
            INSERT OR REPLACE INTO Descricao (produto, material, cor, tt) 
            VALUES ("Peruca Yu Nishin", "Fibras sintéticas de alta qualidade.", "como mostra na imagem.", "20cm / Repicado");
            ');
        }
        $data = $con->prepare('
        select nome from Produto where nome ="Peruca Tanjiro Kamada";
        
        ');
        $data->execute();
        $dt =$data->fetch();
        if (!$dt ){
            $con->exec('
            INSERT INTO Produto (nome, preco, categoria, tamanho, img) 
            VALUES ("Peruca Tanjiro Kamada", "R$ 84,00", "Peruca", "P", "/Cospobre MVC/public/images/PerucaTanjiroKamada.svg");
            INSERT OR REPLACE INTO Descricao (produto, material, cor, tt) 
            VALUES ("Peruca Tanjiro Kamada", "Fibras sintéticas de alta qualidade.", "como mostra na imagem.", "40cm / Repicado");
            ');
        }
        
        $data = $con->prepare('
        select nome from Produto where nome ="Peruca Emilia";
        
        ');
        $data->execute();
        $dt =$data->fetch();
        if (!$dt ){
            $con->exec('
            INSERT INTO Produto (nome, preco, categoria, tamanho, img) 
            VALUES ("Peruca Emilia", "R$ 50,00", "Peruca", "P", "/Cospobre MVC/public/images/PerucaEmilia.svg");
            INSERT OR REPLACE INTO Descricao (produto, material, cor, tt) 
            VALUES ("Peruca Emilia", "Fibras sintéticas de alta qualidade.", "como mostra na imagem.", "27cm /Corte lateral: 20 cm");
            ');
        }

        $data = $con->prepare('
        select nome from Produto where nome ="Peruca Grey";
        
        ');
        $data->execute();
        $dt =$data->fetch();
        if (!$dt ){
            $con->exec('
            INSERT INTO Produto (nome, preco, categoria, tamanho, img) 
            VALUES ("Peruca Grey", "R$ 75,00", "Peruca", "P", "/Cospobre MVC/public/images/PerucaGrey.svg");
            INSERT OR REPLACE INTO Descricao (produto, material, cor, tt) 
            VALUES ("Peruca Grey", "Fibras sintéticas de alta qualidade.", "como mostra na imagem.", "80cm /Corte lateral: 20 cm");
            ');
        }
        $data = $con->prepare('
        select nome from Produto where nome ="Peruca Emo";
        
        ');
        $data->execute();
        $dt =$data->fetch();
        if (!$dt ){
            $con->exec('
            INSERT INTO Produto (nome, preco, categoria, tamanho, img) 
            VALUES ("Peruca Emo", "R$ 45,00", "Peruca", "P", "/Cospobre MVC/public/images/PerucaEmo.svg");
            INSERT OR REPLACE INTO Descricao (produto, material, cor, tt) 
            VALUES ("Peruca Emo", "Fibras sintéticas de alta qualidade.", "como mostra na imagem.", "40cm /Repicado");
            ');
        }
        $data = $con->prepare('
        select nome from Produto where nome ="Peruca Lazy Town";
        
        ');
        $data->execute();
        $dt =$data->fetch();
        if (!$dt ){
            $con->exec('
            
        INSERT INTO Produto (nome, preco, categoria, tamanho, img) 
        VALUES ("Peruca Lazy Town", "R$ 40,00", "Peruca", "P", "/Cospobre MVC/public/images/PerucaLazyTown.svg");
        INSERT OR REPLACE INTO Descricao (produto, material, cor, tt) 
        VALUES ("Peruca Lazy Town", "Fibras sintéticas de alta qualidade.", "como mostra na imagem.", "30cm /Corte lateral: 27 cm");
            ');
        }
        $data = $con->prepare('
        select nome from Produto where nome ="Peruca Chanel Preta";
        
        ');
        $data->execute();
        $dt =$data->fetch();
        if (!$dt ){
            $con->exec('
            
            INSERT INTO Produto (nome, preco, categoria, tamanho, img) 
            VALUES ("Peruca Chanel Preta", "R$ 40,00", "Peruca", "P", "/Cospobre MVC/public/images/PerucaChanelPreta.svg");
            INSERT OR REPLACE INTO Descricao (produto, material, cor, tt) 
            VALUES ("Peruca Chanel Preta", "Fibras sintéticas de alta qualidade.", "como mostra na imagem.", "30cm /Corte lateral: 27 cm");
            ');
        }

        $data = $con->prepare('
        select nome from Produto where nome ="Peruca Shoyo Hinata";
        
        ');
        $data->execute();
        $dt =$data->fetch();
        if (!$dt ){
            $con->exec('
            
            INSERT INTO Produto (nome, preco, categoria, tamanho, img) 
        VALUES ("Peruca Shoyo Hinata", "R$ 30,00", "Peruca", "P", "/Cospobre MVC/public/images/PerucaShoyoHinata.svg");
        INSERT OR REPLACE INTO Descricao (produto, material, cor, tt) 
        VALUES ("Peruca Shoyo Hinata", "Fibras sintéticas de alta qualidade.", "como mostra na imagem.", "30cm /Repicado");
            ');
        }
        $data = $con->prepare('
        select nome from Produto where nome ="Peruca Chanel Verde";
        
        ');
        $data->execute();
        $dt =$data->fetch();
        if (!$dt ){
            $con->exec('
            
            INSERT INTO Produto (nome, preco, categoria, tamanho, img) 
            VALUES ("Peruca Chanel Verde", "R$ 35,00", "Peruca", "P", "/Cospobre MVC/public/images/PerucaChanelVerde.svg");
            INSERT OR REPLACE INTO Descricao (produto, material, cor, tt) 
            VALUES ("Peruca Chanel Verde", "Fibras sintéticas de alta qualidade.", "como mostra na imagem.", "30cm /Repicado");
            ');
        }

        $data = $con->prepare('select nome from Produto where nome = "Hitai-ite";');
        $data->execute();
        $dt =$data->fetch();
        if (!$dt ){
            $con->exec('
            INSERT INTO Produto (nome, preco, categoria, tamanho, img) 
            VALUES ("Hitai-ite", "R$ 55,00", "Acessórios", "P", "/Cospobre MVC/public/images/Hitaiite.svg");
            INSERT OR REPLACE INTO Descricao (produto, material, cor, tt) 
            VALUES ("Hitai-ite", "Metal, Poliester e Algodão", "como mostra na imagem.", "Circunferência : 40-80 cm (Ajustável)");
            ');
        }

        $data = $con->prepare('select nome from Produto where nome = "Shuriken";');
        $data->execute();
        $dt =$data->fetch();
        if (!$dt ){
            $con->exec('
            INSERT INTO Produto (nome, preco, categoria, tamanho, img) 
            VALUES ("Shuriken", "R$ 75,00", "Acessórios", "P", "/Cospobre MVC/public/images/shuriken.svg");
            INSERT OR REPLACE INTO Descricao (produto, material, cor, tt) 
            VALUES ("Shuriken", "Plástico revestido de metal", "como mostra na imagem.", "Circunferência : 40cm ");
            ');
        }
        
        $data = $con->prepare('select nome from Produto where nome = "Espada Shingeki No Kyojin";');
        $data->execute();
        $dt =$data->fetch();
        if (!$dt ){
            $con->exec('
            INSERT INTO Produto (nome, preco, categoria, tamanho, img) 
            VALUES ("Espada Shingeki No Kyojin", "R$100,00", "Acessórios", "P", "/Cospobre MVC/public/images/shingeki.svg");
            INSERT OR REPLACE INTO Descricao (produto, material, cor, tt) 
            VALUES ("Espada Shingeki No Kyojin", "Plástico revestido de metal", "como mostra na imagem.", "40 cm ");
            ');
        }

        $data = $con->prepare('select nome from Produto where nome = "Báculo Sakura Card Captors";');
        $data->execute();
        $dt =$data->fetch();
        if (!$dt ){
            $con->exec('
            INSERT INTO Produto (nome, preco, categoria, tamanho, img) 
            VALUES ("Báculo Sakura Card Captors", "R$150,00", "Acessórios", "P", "/Cospobre MVC/public/images/baculo.svg");
            INSERT OR REPLACE INTO Descricao (produto, material, cor, tt) 
            VALUES ("Báculo Sakura Card Captors", "Plástico", "como mostra na imagem.", " 30 cm cada bastão");
            ');
        }

        $data = $con->prepare('select nome from Produto where nome = "Cartas Clear Sakura Card Captors";');
        $data->execute();
        $dt =$data->fetch();
        if (!$dt ){
            $con->exec('
            INSERT INTO Produto (nome, preco, categoria, tamanho, img) 
            VALUES ("Cartas Clear Sakura Card Captors", "R$ 90,00", "Acessórios", "P", "/Cospobre MVC/public/images/cartas.svg");
            INSERT OR REPLACE INTO Descricao (produto, material, cor, tt) 
            VALUES ("Cartas Clear Sakura Card Captors", "Plástico", "como mostra na imagem.", " 15 cm cada carta");
            ');
        }

        $data = $con->prepare('select nome from Produto where nome = "Armas Zelda";');
        $data->execute();
        $dt =$data->fetch();
        if (!$dt ){
            $con->exec('
            INSERT INTO Produto (nome, preco, categoria, tamanho, img) 
            VALUES ("Armas Zelda", "R$130,00", "Acessórios", "P", "/Cospobre MVC/public/images/zelda.svg");
            INSERT OR REPLACE INTO Descricao (produto, material, cor, tt) 
            VALUES ("Armas Zelda", "Plástico revestido", "como mostra na imagem.", " 30 cm");
            ');
        }

        $data = $con->prepare('select nome from Produto where nome = "Máscara Batman";');
        $data->execute();
        $dt =$data->fetch();
        if (!$dt ){
            $con->exec('
            INSERT INTO Produto (nome, preco, categoria, tamanho, img) 
            VALUES ("Máscara Batman", "R$ 55,00", "Acessórios", "P", "/Cospobre MVC/public/images/batman.svg");
            INSERT OR REPLACE INTO Descricao (produto, material, cor, tt) 
            VALUES ("Máscara Batman", "Plástico", "como mostra na imagem.", " 40-80 cm (ajustável)");
            ');
        }
        
        $data = $con->prepare('select nome from Produto where nome = "Máscara Spiderman";');
        $data->execute();
        $dt =$data->fetch();
        if (!$dt ){
            $con->exec('
            INSERT INTO Produto (nome, preco, categoria, tamanho, img) 
            VALUES ("Máscara Spiderman", "R$ 55,00", "Acessórios", "P", "/Cospobre MVC/public/images/spiderman.svg");
            INSERT OR REPLACE INTO Descricao (produto, material, cor, tt) 
            VALUES ("Máscara Spiderman", "Plástico", "como mostra na imagem.", " 40-80 cm (ajustável)");
            ');
        }

       
    }

    
}