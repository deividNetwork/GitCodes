#Basic Git Codes


###Status and Logs

> Mostrar status do repositório, UNTRACKED, UNMODFIED, MODIFIED, STAGE, ...


```git status```



> Mostra log de ações

```git log```


> Alterar o estado de file UNTRACKED para STAGE, possibilitando seguir com o commit

```git add <file>```


> Mostra alterações feitas num commit específico

```git show <commit-hash>```


> Diferença dos arquivos antes de comitar

```git diff```



###Commit

> Adicionar um commit com a mensagem A COMMIT HERE

```git commit -m "A COMMIT HERE"```


> Comitar os arquivos já trackeados e modificados

``` git commit -am "OTHER COMMIT HERE"```



###Reset

> Volta o app para um commit especificado.

```git reset <soft>,<mixed>,<hard> <commit-hash>```

soft = Volta para para o untracked, sem apagar o commit

mixed = Volta para o modified permitindo verificar o diff, sem apagar o commit

hard = Volta para o staged, apagando o commit
	


###Revert
> Apenas reverte o commit, sem descartar os anteriores

```git revert <commit-hash>``` 



###Repository remote

> Adiciona um repositório remoto

```git remote add <repository-name> <link-repository>```


> Lista de repositórios remotos

```git remote```


> Mostra informações do repositório remoto

```git remote -v```


> Adiciona repositório remoto

```git remote add <repository-name> <repository-url>```


> Edita url do repositório remoto

```git remote set-url <repository-name> <new-url>``` 



###Push

> Envia app local para o remoto(origin) para o branch master

```git push <repository> <branch>``` 



###Branch

> Cria um novo branch

```git checkout -b <branch-name>```


> Lista todos os branchs e destaca o atual

```git branch```


> Altera para outro branch

```git checkout <branch-name>```


> Remove o branch específico

```git branch -D <branch-name>``` 



###Merge

> Mescla todas as modificações do branch-name com o branch master

```git merge <branch-name>``` 



###Rebase

> Mescla todas as modificações do branch-name com o branch de forma linear

```git rebase <branch-name>``` 



###Alias

> Cria um atalho para um comando específico

```git config --global alias.<shortcut> <command>``` 



###Tags

> Adiciona tags como release/version no GitHub com comentário sobre a mesma

```git tag -a <tag-number> -m "My Message Here"```

> Envia a tag para o GitHub

```git push origin master --tags```


> Delete Tag

```git tag -d <tag-number>``` 


###Delete remote branch and tag

```git push <repository> :<tag-number>```

```git push <repository> :<branch-name>```