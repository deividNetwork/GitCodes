#Basic Git Codes


##Log and Status

> Mostra status do repositório, UNTRACKED, UNMODFIED, MODIFIED, STAGE, ...


```git status```


> Adiciona um commit com a mensagem A COMMIT HERE...

```git commit -m "A COMMIT HERE"```


> Adiciona os arquivos já trackeados e modificados

``` commit -am "OTHER COMMIT HERE"```


> altera o estado de <file> UNTRACKED para STAGE, para proseguir com o commit

```git add <file>```


> mostra alterações feitas num commit específico

```git show <commit-hash>```


> mostra log de ações

```git log```


> diferença dos arquivos antes de commitar

```git diff```



##Reset

> volta o app para um commit especificado.

```git reset <soft>,<mixed>,<hard> <commit-hash>``` 
<soft> = Volta para para o untracked, sem apagar o commit
<mixed> = Volta para o modified permitindo diff, sem apagar o commit
<hard> = Volta para o staged, apagando o commit
	


##Revert
> Apenas reverte o commit, mas sem discartar os anteriores

```git revert <commit-hash>``` 



##Repository remote

> adiciona um repositório remoto

```git remote add <repository-name> <link-repository>```


> lista repositórios remotos

```git remote```


> mosta informações do repositório remoto

```git remote -v```


> Adiciona repositório remoto

```git remote add <repository-name> <repository-url>```


> Edita url do repositório

```git remote set-url <name-repository> <new-url>``` 



##Push

> Envia app local para o remoto(origin) para o branch master

```git push <repository> <branch>``` 



##Branch

> cria um novo branch

```git checkout -b <branch-name>```


> Lista todos os branchs e destaca o atual

```git branch```


> Altera para outro branch

```git checkout <branch-name>```


> remove o branch específico

```git branch -D <branch-name>``` 



##Merge

> Mescla todas as modificações do <branch-name> com o branch master

```git merge <branch-name>``` 



##Rebase

> Mescla todas as modificações do <branch-name> com o branch de forma linear

```git rebase <branch-name>``` 



##Alias

> Cria um atalho para um comando específico

```git config --global alias.<shortcut> <command>``` 



##Tags

> Adiciona tags como release/version no GitHub com comentário sobre a mesma

```git tag -a <tag-number> -m "My Message Here"```

> Envia a tag para o GitHub

```git push origin master --tags```


> Delete Tag

```git tag -d <tag-number>``` 


##Delete remote branch and tag

```git push <repository> :<tag-number>```
```git push <repository> :<branch-name>```