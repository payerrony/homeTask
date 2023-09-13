FROM php

COPY ./app ./
COPY ./public ./
EXPOSE 3000

CMD ["php","-S","0.0.0.0:3000"]

