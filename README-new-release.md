# CSS Development

## dev:

`npm run scss`

```bash
sass --watch css/src/style.scss:css/style.css
```

## production:

pre-deployment procedure: `npm run scss-prod`

```
sass css/src/_header.scss:style.css --no-charset --no-source-map
sass css/src/style.scss:css/style.css -s compressed
```

# Deployment

1. `git checkout master`
2. `npm run scss-prod`
3. commit & push to master
4. pull request to master-release & merge
5. `git checkout master-release`
6. `npm run deploy`

## More info:

1. https://github.com/git-ftp/git-ftp/blob/master/man/git-ftp.1.md
2. https://www.kutac.cz/blog/weby-a-vse-okolo/git-ftp/
3. https://services.github.com/on-demand/downloads/github-git-cheat-sheet.pdf
