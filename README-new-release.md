# CSS Development

## dev:

```bash
sass --watch css/src/style.scss:css/style.css
```

## production:

pre-deployment procedure

```
sass css/src/_header.scss:style.css --no-charset --no-source-map
sass css/src/style.scss:css/style.css -s compressed
```

# Deployment

1. Merge changes to master and then to master-release
2. Sync master-release with the actual release by git ftp

```bash
cd "git-project-root:.../localhost/hradecns.cz_git/..."

git ftp push --branch "master-release"
```

## More info:

1. https://github.com/git-ftp/git-ftp/blob/master/man/git-ftp.1.md
2. https://www.kutac.cz/blog/weby-a-vse-okolo/git-ftp/
3. https://services.github.com/on-demand/downloads/github-git-cheat-sheet.pdf
