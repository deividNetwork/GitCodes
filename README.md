#ATALHOS BÁSICOS DE GIT


##LOG AND STATUS
git status | mostra status de arquivos, UNTRACKED, UNMODFIED, MODIFIED, STAGE

git commit -m "A COMMIT HERE" | adicionada um commit com a mensagem A COMM...

git commit -am "OTHER COMMIT HERE" | adiciona os arquivos já trackeados e modificados

git add <file> | altera o estado de <file> UNTRACKED para STAGE, para proseguir com o commit

git show <commit-hash> | mostra alterações feitas num commit específico

git log | mostra log de ações

git diff | diferença dos arquivos antes de commitar

##RESET

git reset <soft>,<mixed>,<hard> <commit-hash> | volta o app para um commit especificado.
<soft> = Volta para para o untracked, sem apagar o commit
<mixed> = Volta para o modified permitindo diff, sem apagar o commit
<hard> = Volta para o staged, apagando o commit

##REVERT
git revert <commit-hash> | Apenas reverte o commit, mas sem discartar os anteriores

##REPOSITORY REMOTE

git remote add <repository-name> <link-repository> | adiciona um repositório remoto

git remote | lista repositórios remotos

git remote -v | mosta informações do repositório remoto

git remote add origin https://github.com/deividNetwork/CourseGit.git | Adiciona repositório remoto

git remote set-url <name-repository> <new-url> | Edita url do repositório


##PUSH

git push <repository> <branch> | Envia app local para o remoto(origin) para o branch master

##BRANCH

git checkout -b <branch-name> | cria um novo branch

git branch | Lista todos os branchs e destaca o atual

git checkout <branch-name> | Altera para outro branch

git branch -D <branch-name> | remove o branch específico

##MERGE

git merge <branch-name> | Mescla todas as modificações do <branch-name> com o branch master

##REBASE
git rebase <branch-name> | Mescla todas as modificações do <branch-name> com o branch de forma linear


##ALIAS
git config --global alias.<shortcut> <command> | Cria um atalho para um comando específico

##TAGS
git tag -a <tag-number> -m "My Message Here" | Adiciona tags como release/version no GitHub com comentário sobre a mesma
git push origin master --tags | Envia a tag para o GitHub
git tag -d <tag-number> | Deleta tag


##DELETE REMOTE BRANCH AND REMOTE TAG
git push <repository> : <tag-number>
git push <repository> : <branch-name>