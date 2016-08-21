INICIALIZANDO CURSO DE GIT E GITHUB BÁSICO

git status | mostra status de arquivos, UNTRACKED, UNMODFIED, MODIFIED, STAGE

git commit -m "A COMMIT HERE" | adicionada um commit com a mensagem A COMM...

git commit -am "OTHER COMMIT HERE" | adiciona os arquivos já trackeados e modificados

git add <file> | altera o estado de <file> UNTRACKED para STAGE, para proseguir com o commit

git show <commit-hash> | mostra alterações feitas num commit específico

git log | mostra log de ações

git diff | diferença dos arquivos antes de commitar

git reset <soft>,<mixed>,<hard> <commit-hash> | volta o app para um commit especificado.
<soft> = Volta para para o untracked, sem apagar o commit
<mixed> = Volta para o modified permitindo diff, sem apagar o commit
<hard> = Volta para o staged, apagando o commit

git remote add <repository-name> <link-repository> | adiciona um repositório remoto

git remote | lista repositórios remotos

git remote -v | mosta informações do repositório remoto

git remote add origin https://github.com/deividNetwork/CourseGit.git | Adiciona repositório remoto

git remote set-url <name-repository> <new-url> | Edita url do repositório

git push origin master | Envia app local para o remoto(origin) para o branch master