# Using git and github

> First of all - make sure to have git installed in your computer.
> Then open the command line in the project directory.

## Creating a project in git:
```sh
git init
```
## Adding files to the next commit:
```sh
git add fileName.fileExtention --> adds a specific file.
git add . --> adds all the files in the current directory.
git add * --> adds all the files and directories.
```
## Checking status
> in green - the files that would be commited in the next commit.

> in red - the files that where changed, but wouldn't be commited.
```sh
git status
```

## Commiting
> commit all the files we added before, with the specified comment.
```sh
git commit -m "comment"
```

## Setting origin repository
```sh
git remote add origin https....repositoryName.git
```

## Pushing
> push all the last commits to a git server - like github.
```sh
git push http....repositoryName.git master  --> with a link
git push -u origin  --> to a preset repository
```

## Cloning
> to clone existing repository to your computer.
> use this ling when the command line is open on the parent directory.
```sh
git clone http....repositoryName.git
```
