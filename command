Add article.

git add -A && git commit -m 'Add article.' && git push origin master


Push

cd gulp && npm install .  && gulp minify && gulp gh-pages && cd .. && git add -A && git commit -m 'Minify js、html, fix gh-pages path bug.' && git push origin gh-pages --force