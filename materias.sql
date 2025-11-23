SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `materias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) NOT NULL,
  `nivel` varchar(100) DEFAULT NULL,
  `carga_horaria` varchar(50) DEFAULT NULL,
  `imagem` text DEFAULT NULL,
  `link` text DEFAULT NULL,
  PRIMARY KEY (`id`) 
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `materias` (`id`, `titulo`, `nivel`, `carga_horaria`, `imagem`, `link`) VALUES
(1, 'Matemática', 'Iniciante', '12h', 'https://tse1.mm.bing.net/th/id/OIP.oThHyqgSuqK4ma1A292O7AHaHa?cb=thfc1&rs=1&pid=ImgDetMain&o=7&rm=3', 'https://www.somatematica.com.br/emedio.php'),
(2, 'Português', 'Intermediário', '10h', 'https://thf.bing.com/th/id/OIP.DdzuPiiCBYjuQrOD_98O9gHaHy?w=158&h=180&c=7&r=0&o=7&cb=thfc1&dpr=1.3&pid=1.7&rm=3', 'https://www.todamateria.com.br/lingua-portuguesa/'),
(3, 'Biologia', 'Intermediário', '09h', 'https://img.freepik.com/vetores-premium/ilustracao-biologia_611881-429.jpg?semt=ais_hybrid&w=740&q=80', 'https://www.sabermais.am.gov.br/odas/biologia-fotossintese-khan-academy?utm_source=chatgpt.com'),
(4, 'Química e Física', 'Avançado', '14h', 'https://static.docsity.com/documents_first_pages/2022/09/11/d89c03fd9a9e477335026986c96845d7.png?v=1671773733', 'https://curso-gratuito.professorferretto.com.br'),
(5, 'Geografia', 'Avançado', '10h', 'https://tse4.mm.bing.net/th/id/OIP.SDyaL1PJU2u2JlPxh3txuwHaHa?cb=thfc1&rs=1&pid=ImgDetMain&o=7&rm=3', 'https://www.pravaler.com.br/blog/dicas-de-estudo/plano-de-estudos-de-geografia/'),
(6, 'História', 'Avançado', '11h', 'https://static.escolakids.uol.com.br/2024/08/globo-terrestre-decorativo-em-meio-a-livros-antigos.jpg', 'https://cursa.app/pt/curso-gratuito/historia-geral-gbg'),
(7, 'Filosofia e Sociologia', 'Avançado', '7h', 'https://s3.static.brasilescola.uol.com.br/be/2024/10/estatua-de-socrates-em-texto-sobre-filosofia.jpg', 'https://www.ginead.com.br/curso/curso-gratuito-de-introducao-a-filosofia?');

ALTER TABLE `materias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;