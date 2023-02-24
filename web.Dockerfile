FROM nginx:alpine

RUN rm /etc/nginx/conf.d/default.conf
ADD ./nginx.conf /etc/nginx/conf.d/nginx.conf
WORKDIR /var/www/html

CMD ["nginx", "-g", "daemon off;"]
