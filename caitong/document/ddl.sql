/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     2013-5-7 22:52:52                            */
/*==============================================================*/


drop table if exists tbl_goodInfo;

drop table if exists tbl_goodPrice;

drop table if exists tbl_goodType;

drop table if exists tbl_order;

drop table if exists tbl_orderdetail;

drop table if exists tbl_user;

/*==============================================================*/
/* Table: tbl_goodInfo                                          */
/*==============================================================*/
create table tbl_goodInfo
(
   gd_id                varchar(20) not null,
   gt_id                int,
   gd_zhName            varchar(200) not null,
   gd_enName            varchar(100) not null,
   gd_model             varchar(100) not null,
   gd_littleImg         varchar(150) not null,
   gd_adddate           date,
   gd_remark            text not null,
   gd_adder             varbinary(100),
   gd_del               bit,
   primary key (gd_id)
);

alter table tbl_goodInfo comment '商品信息';

/*==============================================================*/
/* Table: tbl_goodPrice                                         */
/*==============================================================*/
create table tbl_goodPrice
(
   gp_id                int not null,
   gd_id                varchar(20),
   gp_rmb               float(8,4),
   gp_euro              float(8,4),
   gp_dollar            float(8,4),
   gp_pound             float(8,4),
   primary key (gp_id)
);

alter table tbl_goodPrice comment '商品价格表';

/*==============================================================*/
/* Table: tbl_goodType                                          */
/*==============================================================*/
create table tbl_goodType
(
   gt_id                int not null,
   gt_parentId          int,
   gt_name              varchar(150),
   primary key (gt_id)
);

alter table tbl_goodType comment '商品类型';

/*==============================================================*/
/* Table: tbl_order                                             */
/*==============================================================*/
create table tbl_order
(
   or_id                varchar(20) not null,
   u_id                 int,
   or_sumprice          float(8,4),
   or_date              datetime,
   or_status            smallint,
   or_address           varchar(500),
   or_telephone         varchar(20),
   or_username          varchar(50),
   or_postcode          varchar(20),
   primary key (or_id)
);

alter table tbl_order comment '订单信息表';

/*==============================================================*/
/* Table: tbl_orderdetail                                       */
/*==============================================================*/
create table tbl_orderdetail
(
   od_id                int not null,
   or_id                varchar(20),
   od_goodName          varchar(100),
   od_price             float(8,4),
   od_count             int,
   od_sumprice          float(8,4),
   primary key (od_id)
);

alter table tbl_orderdetail comment '订单详细';

/*==============================================================*/
/* Table: tbl_user                                              */
/*==============================================================*/
create table tbl_user
(
   u_id                 int not null,
   u_name               varchar(20),
   u_password           varchar(150),
   u_email              varchar(150),
   u_country            varchar(150),
   u_telephone          varchar(20),
   u_type               bit,
   u_lock               bit,
   u_del                bit,
   primary key (u_id)
);

alter table tbl_user comment '用户信息表';

alter table tbl_goodInfo add constraint FK_type_goods foreign key (gt_id)
      references tbl_goodType (gt_id) on delete restrict on update restrict;

alter table tbl_goodPrice add constraint FK_good_price foreign key (gd_id)
      references tbl_goodInfo (gd_id) on delete restrict on update restrict;

alter table tbl_order add constraint FK_ORDER_USER foreign key (u_id)
      references tbl_user (u_id) on delete restrict on update restrict;

alter table tbl_orderdetail add constraint FK_ORDER_DETAIL foreign key (or_id)
      references tbl_order (or_id) on delete restrict on update restrict;

