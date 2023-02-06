FROM ubuntu:latest

MAINTAINER Gnun Avetisyan <gnun.avetisyan@polymorphic.io>

USER root

WORKDIR /var/www/html


RUN  apt-get update  &&  apt-get install -y \
    software-properties-common \
    npm=6.14.8 \
    curl
RUN npm cache clean -f
RUN npm install -g n
RUN n stable

CMD npm run dev
