# 🏛️ Plugin: Institutional Gov Bar

## 🎯 Problema Identificado
Durante a modernização de portais governamentais, identifiquei a necessidade de padronizar a exibição da **Barra de Identidade Visual do Governo Federal**. Inserir o código diretamente no tema (header.php) gerava dificuldades de manutenção e risco de perda de funcionalidade durante atualizações do core do WordPress ou do tema pai.

## 🛠️ Solução Desenvolvida
Desenvolvi este plugin para desacoplar a obrigatoriedade legal da barra da camada visual do tema. 

### Diferenciais Técnicos:
- **Hook Strategy:** Utiliza o hook `wp_body_open` (introduzido no WordPress 5.2), que é a forma mais moderna e recomendada para injetar scripts logo após a abertura da tag body.
- **Z-Index Management:** Camada de CSS injetada via `wp_head` para garantir que a barra não seja sobreposta por elementos de menu ou sliders.
- **Performance:** Carregamento do script via `defer` para não bloquear a renderização da página.

## ✅ Benefícios
- **Independência Total:** O administrador pode trocar de tema e a barra obrigatória continua ativa.
- **Instalação em Lote:** Facilita a ativação em redes multisite ou em múltiplos portais simultaneamente.
- **Manutenção Segura:** Alterações na barra são feitas em um único local, sem risco de quebrar o layout do site.

![Preview da barra](./screenshot.jpeg)

## ⚠️ Transparência e Portfólio
- **Propósito:** Demonstração técnica de desenvolvimento de plugins para WordPress.
- **Refatoração:** O código foi adaptado para um padrão genérico para fins de exposição pública.
- **Propriedade:** A lógica de negócio original foi desenvolvida para à instituição
- **Restrições:** É proibida a comercialização ou redistribuição deste código por terceiros.