PGDMP     3    #                v            seatran    9.5.12    9.5.12     k           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                       false            l           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                       false            m           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                       false            n           1262    16425    seatran    DATABASE     y   CREATE DATABASE seatran WITH TEMPLATE = template0 ENCODING = 'UTF8' LC_COLLATE = 'pt_BR.UTF-8' LC_CTYPE = 'pt_BR.UTF-8';
    DROP DATABASE seatran;
             postgres    false                        2615    2200    public    SCHEMA        CREATE SCHEMA public;
    DROP SCHEMA public;
             postgres    false            o           0    0    SCHEMA public    COMMENT     6   COMMENT ON SCHEMA public IS 'standard public schema';
                  postgres    false    7            p           0    0    SCHEMA public    ACL     �   REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;
                  postgres    false    7                        3079    12397    plpgsql 	   EXTENSION     ?   CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;
    DROP EXTENSION plpgsql;
                  false            q           0    0    EXTENSION plpgsql    COMMENT     @   COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';
                       false    1            �            1255    16485    soma()    FUNCTION     7  CREATE FUNCTION public.soma() RETURNS void
    LANGUAGE plpgsql
    AS $$
BEGIN

	insert into tblsoma (municipio,ano,quantidade,total) select nome_municipio as municipio, ano, count(ano)as quantidade, sum(valor_real) as total from tblconvenio
	group by ano , nome_municipio
	order by municipio, ano;

END;

$$;
    DROP FUNCTION public.soma();
       public       postgres    false    1    7            �            1259    16426    tblconvenio    TABLE     (  CREATE TABLE public.tblconvenio (
    idconvenio integer NOT NULL,
    ano character varying(4),
    resenha character varying(2000),
    partes character varying(2000),
    valor_real real,
    objeto character varying(2000),
    cod_municipio real,
    nome_municipio character varying(100)
);
    DROP TABLE public.tblconvenio;
       public         postgres    false    7            �            1259    16432    tblconvenio_idconvenio_seq    SEQUENCE     �   CREATE SEQUENCE public.tblconvenio_idconvenio_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 1   DROP SEQUENCE public.tblconvenio_idconvenio_seq;
       public       postgres    false    7    181            r           0    0    tblconvenio_idconvenio_seq    SEQUENCE OWNED BY     Y   ALTER SEQUENCE public.tblconvenio_idconvenio_seq OWNED BY public.tblconvenio.idconvenio;
            public       postgres    false    182            �            1259    16434    tblsoma    TABLE     �   CREATE TABLE public.tblsoma (
    idsoma integer NOT NULL,
    municipio character varying(100),
    ano character varying(4),
    quantidade real,
    total real
);
    DROP TABLE public.tblsoma;
       public         postgres    false    7            �            1259    16437    tblsoma_idsoma_seq    SEQUENCE     {   CREATE SEQUENCE public.tblsoma_idsoma_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.tblsoma_idsoma_seq;
       public       postgres    false    183    7            s           0    0    tblsoma_idsoma_seq    SEQUENCE OWNED BY     I   ALTER SEQUENCE public.tblsoma_idsoma_seq OWNED BY public.tblsoma.idsoma;
            public       postgres    false    184            �           2604    16439 
   idconvenio    DEFAULT     �   ALTER TABLE ONLY public.tblconvenio ALTER COLUMN idconvenio SET DEFAULT nextval('public.tblconvenio_idconvenio_seq'::regclass);
 E   ALTER TABLE public.tblconvenio ALTER COLUMN idconvenio DROP DEFAULT;
       public       postgres    false    182    181            �           2604    16440    idsoma    DEFAULT     p   ALTER TABLE ONLY public.tblsoma ALTER COLUMN idsoma SET DEFAULT nextval('public.tblsoma_idsoma_seq'::regclass);
 =   ALTER TABLE public.tblsoma ALTER COLUMN idsoma DROP DEFAULT;
       public       postgres    false    184    183            e          0    16426    tblconvenio 
   TABLE DATA               z   COPY public.tblconvenio (idconvenio, ano, resenha, partes, valor_real, objeto, cod_municipio, nome_municipio) FROM stdin;
    public       postgres    false    181   �       t           0    0    tblconvenio_idconvenio_seq    SEQUENCE SET     K   SELECT pg_catalog.setval('public.tblconvenio_idconvenio_seq', 5604, true);
            public       postgres    false    182            g          0    16434    tblsoma 
   TABLE DATA               L   COPY public.tblsoma (idsoma, municipio, ano, quantidade, total) FROM stdin;
    public       postgres    false    183          u           0    0    tblsoma_idsoma_seq    SEQUENCE SET     B   SELECT pg_catalog.setval('public.tblsoma_idsoma_seq', 828, true);
            public       postgres    false    184            �           2606    16442    tblconvenio_pkey 
   CONSTRAINT     b   ALTER TABLE ONLY public.tblconvenio
    ADD CONSTRAINT tblconvenio_pkey PRIMARY KEY (idconvenio);
 F   ALTER TABLE ONLY public.tblconvenio DROP CONSTRAINT tblconvenio_pkey;
       public         postgres    false    181    181            �           2606    16444    tblsoma_pkey 
   CONSTRAINT     V   ALTER TABLE ONLY public.tblsoma
    ADD CONSTRAINT tblsoma_pkey PRIMARY KEY (idsoma);
 >   ALTER TABLE ONLY public.tblsoma DROP CONSTRAINT tblsoma_pkey;
       public         postgres    false    183    183            e      x������ � �      g      x������ � �     