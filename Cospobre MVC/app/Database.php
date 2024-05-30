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
            VALUES ("Peruca Saber", "R$ 60,00", "Perucas", "M", "/Cospobre MVC/public/images/PerucaSaber.svg");
            INSERT OR REPLACE INTO Descricao (produto, material, cor, tt) 
            VALUES ("Peruca Saber",  "Fibras sintéticas de alta qualidade.", "Loiro.", "10cm / Corte lateral: 27cm");
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
            VALUES ("Peruca Yamamota Kenshin", "R$125,00", "Perucas", "P", "/Cospobre MVC/public/images/PerucaYamamotaKenshin.svg");
            INSERT OR REPLACE INTO Descricao (produto, material, cor, tt) 
            VALUES ("Peruca Yamamota Kenshin" , "Fibras sintéticas de alta qualidade.", "Rosa degradê.", "60cm / Corte lateral: 27cm");
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
            VALUES ("Peruca Agatsuma Zenitsu", "R$155,00", "Perucas", "G", "/Cospobre MVC/public/images/PerucaAgatsumaZenitsu.svg");
            INSERT OR REPLACE INTO Descricao (produto, material, cor, tt) 
            VALUES ("Peruca Agatsuma Zenitsu", "Fibras sintéticas de alta qualidade.", "Laranja.", "40cm / Corte lateral: Repicado");
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
            VALUES ("Peruca Yomotsuki", "R$132,00", "Perucas", "P", "/Cospobre MVC/public/images/PerucaYomotsukiRuna.svg");
            INSERT OR REPLACE INTO Descricao (produto, material, cor, tt) 
            VALUES ("Peruca Yomotsuki", "Fibras sintéticas de alta qualidade.", "Cinza platinado.", "60cm / Corte lateral: 30 cm");
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
            VALUES ("Peruca Mauiua Tatsuko", "R$115,00", "Perucas", "M", "/Cospobre MVC/public/images/PerucaMauiuaTatsusuko.svg");
            INSERT OR REPLACE INTO Descricao (produto, material, cor, tt) 
            VALUES ("Peruca Mauiua Tatsuko", "Fibras sintéticas de alta qualidade.", "Roxo escuro.", "120cm / Corte lateral: 27 cm");
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
            VALUES ("Peruca Asuna Homura", "R$ 90,00", "Perucas", "G", "/Cospobre MVC/public/images/PerucaAsunaHomura.svg");
            INSERT OR REPLACE INTO Descricao (produto, material, cor, tt) 
            VALUES ("Peruca Asuna Homura", "Fibras sintéticas de alta qualidade.", "Rosa bebê.", "160cm / Corte lateral: 27 cm");
            
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
            VALUES ("Peruca Arashi Henra", "R$ 98,00", "Perucas", "G", "/Cospobre MVC/public/images/PerucaArashiHenra.svg");
            INSERT OR REPLACE INTO Descricao (produto, material, cor, tt) 
            VALUES ("Peruca Arashi Henra", "Fibras sintéticas de alta qualidade.", "Granny Cinza.", "60cm / Corte lateral: 40 cm");
            
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
            VALUES ("Peruca Haya Konbuka", "R$120,00", "Perucas", "M", "/Cospobre MVC/public/images/PerucaHayaKonbuka.svg");
            INSERT OR REPLACE INTO Descricao (produto, material, cor, tt) 
            VALUES ("Peruca Haya Konbuka", "Fibras sintéticas de alta qualidade.", "Preto com vermelho.", "100cm / Corte lateral: 40 cm");
           
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
            VALUES ("Peruca Kacari Nyoa", "R$ 90,00", "Perucas", "P", "/Cospobre MVC/public/images/PerucaKacariNyoa.svg");
            INSERT OR REPLACE INTO Descricao (produto, material, cor, tt) 
            VALUES ("Peruca Kacari Nyoa", "Fibras sintéticas de alta qualidade.", "Laranja.", "60cm / Corte lateral: 20 cm");
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
            VALUES ("Peruca Megumi", "R$ 60,00", "Perucas", "P", "/Cospobre MVC/public/images/PerucaMegumi.svg");
            INSERT OR REPLACE INTO Descricao (produto, material, cor, tt) 
            VALUES ("Peruca Megumi", "Fibras sintéticas de alta qualidade.", "Preto azulado.", "30cm / Repicado");
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
            VALUES ("Peruca Itadori Yuji", "R$ 60,00", "Perucas", "P", "/Cospobre MVC/public/images/PerucaItadoriYuji.svg");
            INSERT OR REPLACE INTO Descricao (produto, material, cor, tt) 
            VALUES ("Peruca Itadori Yuji", "Fibras sintéticas de alta qualidade.", "Rosa bebê.", "20cm / Repicado");
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
            VALUES ("Peruca Yu Nishin", "R$ 45,00", "Perucas", "P", "/Cospobre MVC/public/images/PerucaYuNishin.svg");
            INSERT OR REPLACE INTO Descricao (produto, material, cor, tt) 
            VALUES ("Peruca Yu Nishin", "Fibras sintéticas de alta qualidade.", "Preto com luzes castanhas.", "20cm / Repicado");
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
            VALUES ("Peruca Tanjiro Kamada", "R$ 84,00", "Perucas", "P", "/Cospobre MVC/public/images/PerucaTanjiroKamada.svg");
            INSERT OR REPLACE INTO Descricao (produto, material, cor, tt) 
            VALUES ("Peruca Tanjiro Kamada", "Fibras sintéticas de alta qualidade.", "Preto com degradê castanho.", "40cm / Repicado");
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
            VALUES ("Peruca Emilia", "R$ 50,00", "Perucas", "P", "/Cospobre MVC/public/images/PerucaEmilia.svg");
            INSERT OR REPLACE INTO Descricao (produto, material, cor, tt) 
            VALUES ("Peruca Emilia", "Fibras sintéticas de alta qualidade.", "Azul bebê.", "27cm /Corte lateral: 20 cm");
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
            VALUES ("Peruca Grey", "R$ 75,00", "Perucas", "P", "/Cospobre MVC/public/images/PerucaGrey.svg");
            INSERT OR REPLACE INTO Descricao (produto, material, cor, tt) 
            VALUES ("Peruca Grey", "Fibras sintéticas de alta qualidade.", "Granny Cinza.", "80cm /Corte lateral: 20 cm");
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
            VALUES ("Peruca Emo", "R$ 45,00", "Perucas", "P", "/Cospobre MVC/public/images/PerucaEmo.svg");
            INSERT OR REPLACE INTO Descricao (produto, material, cor, tt) 
            VALUES ("Peruca Emo", "Fibras sintéticas de alta qualidade.", "Azul Petróleo.", "40cm /Repicado");
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
        VALUES ("Peruca Lazy Town", "R$ 40,00", "Perucas", "P", "/Cospobre MVC/public/images/PerucaLazyTown.svg");
        INSERT OR REPLACE INTO Descricao (produto, material, cor, tt) 
        VALUES ("Peruca Lazy Town", "Fibras sintéticas de alta qualidade.", "Rosa pink bebê.", "30cm /Corte lateral: 27 cm");
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
            VALUES ("Peruca Chanel Preta", "R$ 40,00", "Perucas", "P", "/Cospobre MVC/public/images/PerucaChanelPreta.svg");
            INSERT OR REPLACE INTO Descricao (produto, material, cor, tt) 
            VALUES ("Peruca Chanel Preta", "Fibras sintéticas de alta qualidade.", "Preto.", "30cm /Corte lateral: 27 cm");
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
        VALUES ("Peruca Shoyo Hinata", "R$ 30,00", "Perucas", "P", "/Cospobre MVC/public/images/PerucaShoyoHinata.svg");
        INSERT OR REPLACE INTO Descricao (produto, material, cor, tt) 
        VALUES ("Peruca Shoyo Hinata", "Fibras sintéticas de alta qualidade.", "Laranja.", "30cm /Repicado");
            ');
        }
        $data = $con->prepare('
        select nome from Produto where nome ="Peruca Chanel";
        
        ');
        $data->execute();
        $dt =$data->fetch();
        if (!$dt ){
            $con->exec('
            
            INSERT INTO Produto (nome, preco, categoria, tamanho, img) 
            VALUES ("Peruca Chanel", "R$ 35,00", "Perucas", "P", "/Cospobre MVC/public/images/PerucaChanelVerde.svg");
            INSERT OR REPLACE INTO Descricao (produto, material, cor, tt) 
            VALUES ("Peruca Chanel", "Fibras sintéticas de alta qualidade.", "Verde grama.", "30cm /Repicado");
            ');
        }

        $data = $con->prepare('
        select nome from Produto where nome ="Peruca Cruella";
        
        ');
        $data->execute();
        $dt =$data->fetch();
        if (!$dt ){
            $con->exec('
            
            INSERT INTO Produto (nome, preco, categoria, tamanho, img) 
            VALUES ("Peruca Cruella", "R$ 210,00", "Perucas", "P", "/Cospobre MVC/public/images/Cruella.svg");
            INSERT OR REPLACE INTO Descricao (produto, material, cor, tt) 
            VALUES ("Peruca Cruella", "Fibras sintéticas de alta qualidade.", "Preto e branco.", "34cm /Corte lateral: 24 cm");
            ');
        }

        $data = $con->prepare('
        select nome from Produto where nome ="Peruca Nana Guon";
        
        ');
        $data->execute();
        $dt =$data->fetch();
        if (!$dt ){
            $con->exec('
            
            INSERT INTO Produto (nome, preco, categoria, tamanho, img) 
            VALUES ("Peruca Nana Guon", "R$ 100,00", "Perucas", "M", "/Cospobre MVC/public/images/Nana Guon.svg");
            INSERT OR REPLACE INTO Descricao (produto, material, cor, tt) 
            VALUES ("Peruca Nana Guon", "Fibras sintéticas de alta qualidade.", "Louro.", "60cm /Corte lateral: 27 cm");
            ');
        }

        $data = $con->prepare('
        select nome from Produto where nome ="Peruca Haname Yue";
        
        ');
        $data->execute();
        $dt =$data->fetch();
        if (!$dt ){
            $con->exec('
            
            INSERT INTO Produto (nome, preco, categoria, tamanho, img) 
            VALUES ("Peruca Haname Yue", "R$ 220,00", "Perucas", "M", "/Cospobre MVC/public/images/Haname Yue.svg");
            INSERT OR REPLACE INTO Descricao (produto, material, cor, tt) 
            VALUES ("Peruca Haname Yue", "Fibras sintéticas de alta qualidade.", "Louro arosado.", "40cm /Corte lateral: 27 cm");
            ');
        }

        $data = $con->prepare('
        select nome from Produto where nome ="Peruca Venti";
        
        ');
        $data->execute();
        $dt =$data->fetch();
        if (!$dt ){
            $con->exec('
            
            INSERT INTO Produto (nome, preco, categoria, tamanho, img) 
            VALUES ("Peruca Venti", "R$ 210,00", "Perucas", "M", "/Cospobre MVC/public/images/Peruca Venti com Tranças.svg");
            INSERT OR REPLACE INTO Descricao (produto, material, cor, tt) 
            VALUES ("Peruca Venti", "Fibras sintéticas de alta qualidade.", "Azul com degradê.", "70cm /Corte lateral: 30 cm");
            ');
        }

        $data = $con->prepare('
        select nome from Produto where nome ="Bota Zero Two";
        
        ');
        $data->execute();
        $dt =$data->fetch();
        if (!$dt ){
            $con->exec('
            
            INSERT INTO Produto (nome, preco, categoria, tamanho, img) 
            VALUES ("Bota Zero Two", "R$ 70,00", "Sapatos", "G", "/Cospobre MVC/public/images/Bota Zero Two.svg");
            INSERT OR REPLACE INTO Descricao (produto, material, cor, tt) 
            VALUES ("Bota Zero Two", "Látex.", "Vermelho.", "Cano médio - 20 cm.");
            ');
        }

        $data = $con->prepare('
        select nome from Produto where nome ="Bota Ninja";
        
        ');
        $data->execute();
        $dt =$data->fetch();
        if (!$dt ){
            $con->exec('
            
            INSERT INTO Produto (nome, preco, categoria, tamanho, img) 
            VALUES ("Bota Ninja", "R$ 90,00", "Sapatos", "G", "/Cospobre MVC/public/images/Bota Ninja Azul.svg");
            INSERT OR REPLACE INTO Descricao (produto, material, cor, tt) 
            VALUES ("Bota Ninja", "Couro pintado de azul.", "Azul petróleo.", "Cano curto.");
            ');
        }

        $data = $con->prepare('
        select nome from Produto where nome ="Bota Shaman King Horohoro";
        
        ');
        $data->execute();
        $dt =$data->fetch();
        if (!$dt ){
            $con->exec('
            
            INSERT INTO Produto (nome, preco, categoria, tamanho, img) 
            VALUES ("Bota Shaman King Horohoro", "R$ 150,00", "Sapatos", "M", "/Cospobre MVC/public/images/Bota Shaman King Horohoro.svg");
            INSERT OR REPLACE INTO Descricao (produto, material, cor, tt) 
            VALUES ("Bota Shaman King Horohoro", "Couro.", "Cinza com branco.", "Cano curto - 15 cm.");
            ');
        }

        $data = $con->prepare('
        select nome from Produto where nome ="Sapato Kawaii";
        
        ');
        $data->execute();
        $dt =$data->fetch();
        if (!$dt ){
            $con->exec('
            
            INSERT INTO Produto (nome, preco, categoria, tamanho, img) 
            VALUES ("Sapato Kawaii", "R$ 190,00", "Sapatos", "P", "/Cospobre MVC/public/images/Sapato Kawaii Rosa.svg");
            INSERT OR REPLACE INTO Descricao (produto, material, cor, tt) 
            VALUES ("Sapato Kawaii", "Plástico.", "Rosa bebê.", "Salto 15 Plataforma.");
            ');
        }

        $data = $con->prepare('
        select nome from Produto where nome ="Bota Natsumi Kyouno";
        
        ');
        $data->execute();
        $dt =$data->fetch();
        if (!$dt ){
            $con->exec('
            
            INSERT INTO Produto (nome, preco, categoria, tamanho, img) 
            VALUES ("Bota Natsumi Kyouno", "R$ 50,00", "Sapatos", "G", "/Cospobre MVC/public/images/Bota Natsumi Kyouno.svg");
            INSERT OR REPLACE INTO Descricao (produto, material, cor, tt) 
            VALUES ("Bota Natsumi Kyouno", "Couro.", "Preto com laranja.", "Salto 7 Vírgula.");
            ');
        }

        $data = $con->prepare('
        select nome from Produto where nome ="Bota Kirito";
        
        ');
        $data->execute();
        $dt =$data->fetch();
        if (!$dt ){
            $con->exec('
            
            INSERT INTO Produto (nome, preco, categoria, tamanho, img) 
            VALUES ("Bota Kirito", "R$ 80,00", "Sapatos", "G", "/Cospobre MVC/public/images/Bota Kirito.svg");
            INSERT OR REPLACE INTO Descricao (produto, material, cor, tt) 
            VALUES ("Bota Kirito", "Couro.", "Cinza com branco.", "Cano curto - 10 cm.");
            ');
        }

        $data = $con->prepare('
        select nome from Produto where nome ="Bota Junko Enoshima";
        
        ');
        $data->execute();
        $dt =$data->fetch();
        if (!$dt ){
            $con->exec('
            
            INSERT INTO Produto (nome, preco, categoria, tamanho, img) 
            VALUES ("Bota Junko Enoshima", "R$ 170,00", "Sapatos", "M", "/Cospobre MVC/public/images/Bota Junko Enoshima.svg");
            INSERT OR REPLACE INTO Descricao (produto, material, cor, tt) 
            VALUES ("Bota Junko Enoshima", "Couro.", "Preto com vermelho.", "Cano longo - 40 cm.");
            ');
        }

        $data = $con->prepare('
        select nome from Produto where nome ="Bota Hitai-ite";
        
        ');
        $data->execute();
        $dt =$data->fetch();
        if (!$dt ){
            $con->exec('
            
            INSERT INTO Produto (nome, preco, categoria, tamanho, img) 
            VALUES ("Bota Hitai-ite", "R$ 60,00", "Sapatos", "P", "/Cospobre MVC/public/images/Bota Hitai-ite.svg");
            INSERT OR REPLACE INTO Descricao (produto, material, cor, tt) 
            VALUES ("Bota Hitai-ite", "Couro.", "Marrom escuro.", "Cano curto.");
            ');
        }

        $data = $con->prepare('
        select nome from Produto where nome ="Conjunto Shinobu Kocho";
        
        ');
        $data->execute();
        $dt =$data->fetch();
        if (!$dt ){
            $con->exec('
            
            INSERT INTO Produto (nome, preco, categoria, tamanho, img) 
            VALUES ("Conjunto Shinobu Kocho", "R$ 60,00", "Conjuntos", "U", "/Cospobre MVC/public/images/Shinobu Kocho.svg");
            INSERT OR REPLACE INTO Descricao (produto, material, cor, tt) 
            VALUES ("Conjunto Shinobu Kocho", "Seda.", "Degradê de tons claros e roupa em preto.", "Kimono longo.");
            ');
        }

        $data = $con->prepare('
        select nome from Produto where nome ="Conjunto Hu Tao";
        
        ');
        $data->execute();
        $dt =$data->fetch();
        if (!$dt ){
            $con->exec('
            
            INSERT INTO Produto (nome, preco, categoria, tamanho, img) 
            VALUES ("Conjunto Hu Tao", "R$ 160,00", "Conjuntos", "U", "/Cospobre MVC/public/images/Hu Tao.svg");
            INSERT OR REPLACE INTO Descricao (produto, material, cor, tt) 
            VALUES ("Conjunto Hu Tao", "Seda.", "Mescla de tons escuros.", "Kimono longo.");
            ');
        }

        $data = $con->prepare('
        select nome from Produto where nome ="Conjunto Ichigo";
        
        ');
        $data->execute();
        $dt =$data->fetch();
        if (!$dt ){
            $con->exec('
            
            INSERT INTO Produto (nome, preco, categoria, tamanho, img) 
            VALUES ("Conjunto Ichigo", "R$ 200,00", "Conjuntos", "U", "/Cospobre MVC/public/images/Kimono Ichigo.svg");
            INSERT OR REPLACE INTO Descricao (produto, material, cor, tt) 
            VALUES ("Conjunto Ichigo", "Seda.", "Preto com cinto branco.", "Kimono longo.");
            ');
        }
    
        $data = $con->prepare('
        select nome from Produto where nome ="Conjunto Obanai Iguro";
        
        ');
        $data->execute();
        $dt =$data->fetch();
        if (!$dt ){
            $con->exec('
            
            INSERT INTO Produto (nome, preco, categoria, tamanho, img) 
            VALUES ("Conjunto Obanai Iguro", "R$ 110,00", "Conjuntos", "M", "/Cospobre MVC/public/images/Obanai Iguro.svg");
            INSERT OR REPLACE INTO Descricao (produto, material, cor, tt) 
            VALUES ("Conjunto Obanai Iguro", "Seda.", "Listras em azul e cinza.", "Kimono médio.");
            ');
        }

        $data = $con->prepare('
        select nome from Produto where nome ="Conjunto Sasuke Uchiha";
        
        ');
        $data->execute();
        $data = $con->prepare('
        select nome from Produto where nome ="Conjunto Sasuke Uchiha";
        
        ');
        $data->execute();
        $dt =$data->fetch();
        if (!$dt ){
            $con->exec('
            
            INSERT INTO Produto (nome, preco, categoria, tamanho, img) 
            VALUES ("Conjunto Sasuke Uchiha", "R$ 190,00", "Conjuntos", "G", "/Cospobre MVC/public/images/Sasuke Uchiha.svg");
            INSERT OR REPLACE INTO Descricao (produto, material, cor, tt) 
            VALUES ("Conjunto Sasuke Uchiha", "Poliéster.", "Cinza, Azul e cinto roxo.", "Onesie.");
            ');
        }

        $data = $con->prepare('
        select nome from Produto where nome ="Conjunto Aibara Yuzu";
        
        ');
        $data->execute();
        $dt =$data->fetch();
        if (!$dt ){
            $con->exec('
            
            INSERT INTO Produto (nome, preco, categoria, tamanho, img) 
            VALUES ("Conjunto Aibara Yuzu", "R$ 190,00", "Conjuntos", "P", "/Cospobre MVC/public/images/Uniforme Aibara Yuzu.svg");
            INSERT OR REPLACE INTO Descricao (produto, material, cor, tt) 
            VALUES ("Conjunto Aibara Yuzu", "Poliéster.", "Tons esverdeados e em marrom .", "Onesie de Saia curta.");
            ');
        }

        $data = $con->prepare('
        select nome from Produto where nome ="Conjunto Nobara Kugisaki";
        
        ');
        $data->execute();
        $dt =$data->fetch();
        if (!$dt ){
            $con->exec('
            
            INSERT INTO Produto (nome, preco, categoria, tamanho, img) 
            VALUES ("Conjunto Nobara Kugisaki", "R$ 250,00", "Conjuntos", "M", "/Cospobre MVC/public/images/Nobara Kugisaki.svg");
            INSERT OR REPLACE INTO Descricao (produto, material, cor, tt) 
            VALUES ("Conjunto Nobara Kugisaki", "Poliéster.", "Azul.", "Apron médio.");
            ');
        }

        $data = $con->prepare('
        select nome from Produto where nome ="Conjunto Mary Saotome";
        ');
        $data->execute();
        $dt =$data->fetch();
        if (!$dt ){
            $con->exec('
            
            INSERT INTO Produto (nome, preco, categoria, tamanho, img) 
            VALUES ("Conjunto Mary Saotome", "R$ 180,00", "Conjuntos", "G", "/Cospobre MVC/public/images/Mary Saotome.svg");
            INSERT OR REPLACE INTO Descricao (produto, material, cor, tt) 
            VALUES ("Conjunto Mary Saotome", "Poliéster.", "Vermelho com preto.", "Tair curto.");
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
            VALUES ("Hitai-ite", "Metal, Poliester e Algodão", "Preto com prata metálico.", "Circunferência : 40-80 cm (Ajustável)");
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
            VALUES ("Shuriken", "Plástico revestido de metal", "Chumbo.", "Circunferência : 40cm ");
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
            VALUES ("Espada Shingeki No Kyojin", "Plástico revestido de metal", "Prata metálico.", "40 cm ");
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
            VALUES ("Báculo Sakura Card Captors", "Plástico", "Rosa,Branco e detalhes amarelos ouro.", " 30 cm cada bastão");
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
            VALUES ("Cartas Clear Sakura Card Captors", "Plástico", "Branco e detalhes amarelos ouro.", " 15 cm cada carta");
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
            VALUES ("Armas Zelda", "Plástico revestido", "Prata metálico e marrom.", " 30 cm");
            ');
        }

        $data = $con->prepare('select nome from Produto where nome = "Máscara Batman";');
        $data->execute();
        $dt =$data->fetch();
        if (!$dt ){
            $con->exec('
            INSERT INTO Produto (nome, preco, categoria, tamanho, img) 
            VALUES ("Máscara Batman", "R$ 55,00", "Acessórios", "M", "/Cospobre MVC/public/images/batman.svg");
            INSERT OR REPLACE INTO Descricao (produto, material, cor, tt) 
            VALUES ("Máscara Batman", "Plástico", "Preto.", " 40-80 cm (ajustável)");
            ');
        }
        
        $data = $con->prepare('select nome from Produto where nome = "Máscara Spiderman";');
        $data->execute();
        $dt =$data->fetch();
        if (!$dt ){
            $con->exec('
            INSERT INTO Produto (nome, preco, categoria, tamanho, img) 
            VALUES ("Máscara Spiderman", "R$ 55,00", "Acessórios", "M", "/Cospobre MVC/public/images/spiderman.svg");
            INSERT OR REPLACE INTO Descricao (produto, material, cor, tt) 
            VALUES ("Máscara Spiderman", "Plástico", "Vermelho com detalhes em preto.", " 40-80 cm (ajustável)");
            ');
        }

       
    }

    
}