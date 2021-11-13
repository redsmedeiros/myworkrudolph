import pygame
import constantes
import sprites
import os


class Game:
    def __init__(self):
        pygame.init() #criar tela do jogo
        pygame.mixer.init() #usar a biblioteca de audio
        #criar a largura e altura da tela
        self.tela = pygame.display.set_mode((constantes.ALTURA, constantes.LARGURA)) #funçao de altura e largura passando do arquivo de constante
        #criar o titulo do jogo
        pygame.display.set_caption(constantes.TITULO_JOGO)
        #criar relogio para definir as taxa de frames
        self.relogio = pygame.time.Clock()
        #criar o atributo para rolar o jogo, o loop infinito
        self.run = True
        #usar a função para definir fontes
        self.fonte = pygame.font.match_font(constantes.FONT)
        #chamar a função para carregar os arquivos
        self.carregar_arquivos()

    #criar o metodo de novo jogo, onde irá inicializar os sprites
    def novo_jogo(self):
        #criar grupo para armazenar as sprites
        self.todas_as_sprites = pygame.sprite.Group()
        #chamar a função rodar para executar o loop infinito
        self.rodar()

    def rodar(self):
        #loop principal
        self.jogando = True
        while self.jogando:
            #definir a taxa de frames do jogo, chamando o atributo relogio com a função tick para adicionar a taxa
            self.relogio.tick(constantes.FPS)
            #chamar o metodo de eventos do python
            self.eventos()
            #chamar o metodo atualizar sprites, sempre que tiver movimentação ou colizaão
            self.atualizar_sprites()
            #chamar o metodo que vai desenhar as sprites apos atualização
            self.desenhar_sprites()

    def eventos(self):
        #definir os eventos do jogo
        for event in pygame.event.get():
            if event.type == pygame.QUIT: #quando clicar para sair do jogo
                if self.jogando:
                    self.jogando = False #quebra o loop principal
                self.run = False #quebra o segundo loop

    def atualizar_sprites(self):
        #pegar o grupo de sprites e vou atualizar
        self.todas_as_sprites.update()

    def desenhar_sprites(self):
        #limpa a tela pintando de preto
        self.tela.fill(constantes.PRETO)
        #desenhar as sprites na tela objeto
        self.todas_as_sprites.draw(self.tela)
        #chamar afunção para atualizar a tela
        pygame.display.flip()

    # vai carregar os arquivos de audio e imagens
    def carregar_arquivos(self):
        diretorio_imagens = os.path.join(os.getcwd(),'img') #pega duas strings e junta
        self.diretorio_audios = os.path.join(os.getcwd(),'audio')
        self.spritesheet = os.path.join(diretorio_imagens, constantes.IMAGEM)
        self.pacman_imagem = os.path.join(diretorio_imagens, constantes.PACMAN)
        #transformar as strings criadas em imagens
        self.pacman_imagem = pygame.image.load(self.pacman_imagem).convert()


    def mostrar_texto(self, texto, tamanho, cor, x, y):
        #exibir o texto na tela
        fonte = pygame.font.Font(self.fonte, tamanho)
        texto = fonte.render(texto, True, cor)#função que cria o texto
        texto_rect = texto.get_rect()#obtendo a "div" do texto
        texto_rect.midtop = (x,y) #posicionando no centro com essas coordenadas
        self.tela.blit(texto, texto_rect) #faz aparecer o texto na tela nessa posição



    def start(self): #vai mostrar a tela de start
        self.mostrar_texto('Pressione uma tecla para jogar', 32, constantes.AMARELO, constantes.LARGURA /2,320)
        pygame.display.flip()#para chamar os frames
        #criar o loop que espera o jogador entrar no loop principal
        self.esperar_por_jogador()

    def esperar_por_jogador(self):
        esperando = True
        while esperando:
            self.relogio.tick(constantes.FPS)
            for event in pygame.event.get():
                if event.type == pygame.QUIT:
                    esperando = False
                    self.run = False
                if event.type == pygame.KEYUP:
                    esperando = False


    def game_over(self): #vai mostrar a tela de game over
        pass

#criar objeto
jogo = Game()
#usar o metodo para mostrar o start
jogo.start()

while jogo.run:
    jogo.novo_jogo()
    jogo.game_over()

















