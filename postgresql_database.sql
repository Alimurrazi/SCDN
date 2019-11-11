--
-- PostgreSQL database dump
--

-- Dumped from database version 9.6.10
-- Dumped by pg_dump version 9.6.10

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: _admins; Type: TABLE; Schema: public; Owner: rebasedata
--

CREATE TABLE public.admins (
    id smallint,
    user_id smallint,
    created_at character varying(1) DEFAULT NULL::character varying,
    updated_at character varying(1) DEFAULT NULL::character varying
);


-- ALTER TABLE public.admins;

--
-- Name: _announcements; Type: TABLE; Schema: public; Owner: rebasedata
--

CREATE TABLE public.announcements (
    id smallint,
    title character varying(23) DEFAULT NULL::character varying,
    content character varying(59) DEFAULT NULL::character varying,
    created_at character varying(19) DEFAULT NULL::character varying,
    updated_at character varying(19) DEFAULT NULL::character varying,
    date character varying(10) DEFAULT NULL::character varying
);


-- ALTER TABLE public.announcements;

--
-- Name: _attachments; Type: TABLE; Schema: public; Owner: rebasedata
--

CREATE TABLE public.attachments (
    id smallint,
    announcement_id smallint,
    dir character varying(25) DEFAULT NULL::character varying,
    created_at character varying(19) DEFAULT NULL::character varying,
    updated_at character varying(19) DEFAULT NULL::character varying
);


-- ALTER TABLE public.attachments;

--
-- Name: _awards; Type: TABLE; Schema: public; Owner: rebasedata
--

CREATE TABLE public.awards (
    id smallint,
    dir character varying(24) DEFAULT NULL::character varying,
    description character varying(95) DEFAULT NULL::character varying,
    created_at character varying(19) DEFAULT NULL::character varying,
    updated_at character varying(19) DEFAULT NULL::character varying,
    title character varying(54) DEFAULT NULL::character varying
);


-- ALTER TABLE public.awards;

--
-- Name: _blogs; Type: TABLE; Schema: public; Owner: rebasedata
--

CREATE TABLE public.blogs (
    id smallint,
    title character varying(20) DEFAULT NULL::character varying,
    content character varying(9343) DEFAULT NULL::character varying,
    author smallint,
    created_at character varying(19) DEFAULT NULL::character varying,
    updated_at character varying(19) DEFAULT NULL::character varying,
    preview character varying(250) DEFAULT NULL::character varying
);


-- ALTER TABLE public.blogs;

--
-- Name: _developer_education; Type: TABLE; Schema: public; Owner: rebasedata
--

CREATE TABLE public.developer_education (
    id character varying(1) DEFAULT NULL::character varying,
    developer_id character varying(1) DEFAULT NULL::character varying,
    education character varying(1) DEFAULT NULL::character varying,
    starting_year character varying(1) DEFAULT NULL::character varying,
    ending_year character varying(1) DEFAULT NULL::character varying,
    created_at character varying(1) DEFAULT NULL::character varying,
    updated_at character varying(1) DEFAULT NULL::character varying
);


-- ALTER TABLE public.developer_education;

--
-- Name: _developer_experiences; Type: TABLE; Schema: public; Owner: rebasedata
--

CREATE TABLE public.developer_experiences (
    id smallint,
    developer_id smallint,
    experience character varying(29) DEFAULT NULL::character varying,
    created_at character varying(19) DEFAULT NULL::character varying,
    updated_at character varying(19) DEFAULT NULL::character varying,
    duration character varying(9) DEFAULT NULL::character varying
);


-- ALTER TABLE public.developer_experiences;

--
-- Name: _developer_skill; Type: TABLE; Schema: public; Owner: rebasedata
--

CREATE TABLE public.developer_skill (
    id smallint,
    developer_id smallint,
    skill character varying(10) DEFAULT NULL::character varying,
    created_at character varying(19) DEFAULT NULL::character varying,
    updated_at character varying(19) DEFAULT NULL::character varying
);


-- ALTER TABLE public.developer_skill OWNER TO rebasedata;

--
-- Name: _developers; Type: TABLE; Schema: public; Owner: rebasedata
--

CREATE TABLE public.developers (
    id smallint,
    name character varying(20) DEFAULT NULL::character varying,
    specialty character varying(17) DEFAULT NULL::character varying,
    email character varying(26) DEFAULT NULL::character varying,
    website character varying(10) DEFAULT NULL::character varying,
    facebook character varying(95) DEFAULT NULL::character varying,
    twitter character varying(1) DEFAULT NULL::character varying,
    github character varying(1) DEFAULT NULL::character varying,
    linkedin character varying(1) DEFAULT NULL::character varying,
    created_at character varying(19) DEFAULT NULL::character varying,
    updated_at character varying(19) DEFAULT NULL::character varying,
    image character varying(33) DEFAULT NULL::character varying
);


-- ALTER TABLE public.developers OWNER TO rebasedata;

--
-- Name: _images; Type: TABLE; Schema: public; Owner: rebasedata
--

CREATE TABLE public.images (
    id smallint,
    dir character varying(26) DEFAULT NULL::character varying,
    description character varying(32) DEFAULT NULL::character varying,
    created_at character varying(19) DEFAULT NULL::character varying,
    updated_at character varying(19) DEFAULT NULL::character varying
);


-- ALTER TABLE public.images OWNER TO rebasedata;

--
-- Name: _messages; Type: TABLE; Schema: public; Owner: rebasedata
--

CREATE TABLE public.messages (
    id smallint,
    email character varying(23) DEFAULT NULL::character varying,
    content character varying(175) DEFAULT NULL::character varying,
    created_at character varying(19) DEFAULT NULL::character varying,
    updated_at character varying(19) DEFAULT NULL::character varying
);


-- ALTER TABLE public.messages OWNER TO rebasedata;

--
-- Name: _migrations; Type: TABLE; Schema: public; Owner: rebasedata
--

CREATE TABLE public.migrations (
    id smallint,
    migration character varying(47) DEFAULT NULL::character varying,
    batch smallint
);


--ALTER TABLE public.migrations OWNER TO rebasedata;

--
-- Name: _password_resets; Type: TABLE; Schema: public; Owner: rebasedata
--

CREATE TABLE public.password_resets (
    email character varying(1) DEFAULT NULL::character varying,
    token character varying(1) DEFAULT NULL::character varying,
    created_at character varying(1) DEFAULT NULL::character varying
);


-- ALTER TABLE public.password_resets OWNER TO rebasedata;

--
-- Name: _projects; Type: TABLE; Schema: public; Owner: rebasedata
--
 CREATE TABLE public.projects (
    id smallint,
    title character varying(35) DEFAULT NULL::character varying,
    image character varying(26) DEFAULT NULL::character varying,
    description character varying(88) DEFAULT NULL::character varying,
    url character varying(73) DEFAULT NULL::character varying,
    created_at character varying(19) DEFAULT NULL::character varying,
    updated_at character varying(19) DEFAULT NULL::character varying
);


-- ALTER TABLE public.projects OWNER TO rebasedata;

--
-- Name: _tag_relations; Type: TABLE; Schema: public; Owner: rebasedata
--

CREATE TABLE public.tag_relations (
    id smallint,
    blog_id smallint,
    tag_id smallint,
    created_at character varying(19) DEFAULT NULL::character varying,
    updated_at character varying(19) DEFAULT NULL::character varying
);


-- ALTER TABLE public.tag_relations OWNER TO rebasedata;

--
-- Name: _tags; Type: TABLE; Schema: public; Owner: rebasedata
--

CREATE TABLE public.tags (
    id smallint,
    name character varying(10) DEFAULT NULL::character varying,
    content character varying(238) DEFAULT NULL::character varying,
    created_at character varying(19) DEFAULT NULL::character varying,
    updated_at character varying(19) DEFAULT NULL::character varying
);


-- ALTER TABLE public.tags OWNER TO rebasedata;

--
-- Name: _users; Type: TABLE; Schema: public; Owner: rebasedata
--

CREATE TABLE public.users (
    id smallint,
    name character varying(13) DEFAULT NULL::character varying,
    email character varying(23) DEFAULT NULL::character varying,
    password character varying(60) DEFAULT NULL::character varying,
    remember_token character varying(60) DEFAULT NULL::character varying,
    created_at character varying(19) DEFAULT NULL::character varying,
    updated_at character varying(19) DEFAULT NULL::character varying
);


-- ALTER TABLE public.users OWNER TO rebasedata;

--
-- Data for Name: _admins; Type: TABLE DATA; Schema: public; Owner: rebasedata
--

COPY public.admins (id, user_id, created_at, updated_at) FROM stdin;
1	1		
\.


--
-- Data for Name: _announcements; Type: TABLE DATA; Schema: public; Owner: rebasedata
--

COPY public.announcements (id, title, content, created_at, updated_at, date) FROM stdin;
1	Hackathon for '13 batch	Hackathon will be conducted on 31 january at IICT Building	2018-01-17 22:41:44	2018-01-17 22:41:44	01/31/2018
2	Workshop for '13 batch	Workshop on web development will be organized for '13 batch	2018-01-17 22:43:00	2018-01-17 22:43:00	01/15/2018
\.


--
-- Data for Name: attachments; Type: TABLE DATA; Schema: public; Owner: rebasedata
--

COPY public.attachments (id, announcement_id, dir, created_at, updated_at) FROM stdin;
1	2	attachment/1516246980.pdf	2018-01-17 22:43:00	2018-01-17 22:43:00
3	1	null		
\.


--
-- Data for Name: awards; Type: TABLE DATA; Schema: public; Owner: rebasedata
--

COPY public.awards (id, dir, description, created_at, updated_at, title) FROM stdin;
3	img/award/1516825772.jpg	SUST_DROID\r\n(Android)\r\n\r\nNishikanto Sarkar Shimul(2012)\r\nTanveer Preom('12)\r\nMoshiur Siyam('12)	2018-01-24 15:29:32	2018-01-24 15:29:32	Runner-up, SUST InterUniversity Software Contest 2015 
4	img/award/1517035337.jpg	SUST_Hexacore  \r\nTanvir Nihal, Darpon Islam	2018-01-27 01:42:17	2018-01-27 01:42:17	1st Runner up , DIU App Contest 2017
5	img/award/1517036232.jpg	SUST_Hexacore , Tanvir Nihal('13),Darpon Islam('13), Raqibul Hasan('13),Montaser Hamid('13)	2018-01-27 01:57:12	2018-01-27 01:57:12	Runner-up, GigaTech Hackathon
6	img/award/1517036859.jpg	SUST_Sunshine\r\n Nafisa Nowshin Piya, Zakia Ritu, Meem Ahmed	2018-01-27 02:07:39	2018-01-27 02:07:39	Runner-up, 1st National Hackathon for Women 2017
\.


--
-- Data for Name: blogs; Type: TABLE DATA; Schema: public; Owner: rebasedata
--

COPY public.blogs (id, title, content, author, created_at, updated_at, preview) FROM stdin;
3	Analyzing JavaScript	<div>JavaScript is built on some very good ideas and a few very bad ones. The very good ideas include functions, loose typing, dynamic objects, and an expressive object literal notation. The bad ideas include a programming model based on global variables.</div><div><br></div><div>JavaScript’s functions are first class objects with (mostly) lexical scoping. JavaScript is the first lambda language to go mainstream. Deep down, JavaScript has more in common with Lisp and Scheme than with Java. It is Lisp in C’s clothing. This makes JavaScript a remarkably powerful language.</div><div><br></div><div>The fashion in most programming languages today demands strong typing. The theory is that strong typing allows a compiler to detect a large class of errors at compile</div><div>time. The sooner we can detect and repair errors, the less they cost us. JavaScript is a loosely typed language, so JavaScript compilers are unable to detect type errors. This can be alarming to people who are coming to JavaScript from strongly typed languages. But it turns out that strong typing does not eliminate the need for careful</div><div>testing. And I have found in my work that the sorts of errors that strong type checking finds are not the errors I worry about. On the other hand, I find loose typing to be liberating. I don’t need to form complex class hierarchies. And I never have to cast or wrestle with the type system to get the behavior that I want.</div><div><br></div><div>JavaScript has a very powerful object literal notation. Objects can be created simply by listing their components. This notation was the inspiration for JSON, the popular data interchange format. (There will be more about JSON in Appendix E.) A controversial feature in JavaScript is prototypal inheritance. JavaScript has a classfree object system in which objects inherit properties directly from other objects. This is really powerful, but it is unfamiliar to classically trained programmers. If you attempt to apply classical design patterns directly to JavaScript, you will be frustrated. But if you learn to work with JavaScript’s prototypal nature, your efforts will be rewarded. JavaScript is much maligned for its choice of key ideas. For the most part, though, those choices were good, if unusual. But there was one choice that was particularly bad: JavaScript depends on global variables for linkage. All of the top-level variables of all compilation units are tossed together in a common namespace called the global object. This is a bad thing because global variables are evil, and in JavaScript they are fundamental. Fortunately, as we will see, JavaScript also gives us the tools to mitigate this problem.</div><div><br></div><div>In a few cases, we can’t ignore the bad parts. There are some unavoidable awful parts, which will be called out as they occur. They will also be summarized in Appendix A. But we will succeed in avoiding most of the bad parts in this book, summarizing much of what was left out in Appendix B. If you want to learn more about the bad parts and how to use them badly, consult any other JavaScript book.</div> \t\t\t\t\t\t\r\n \t\t\t\t\t	6	2018-01-22 04:45:18	2018-01-22 04:45:18	JavaScript is built on some very good ideas and a few very bad ones. The very good ideas include functions, loose typing, dynamic objects, and an expressive object literal notation. The bad ideas include a programming model based on global variables.
4	Breadth-first search	<p style="color: rgb(37, 44, 51); font-family: &quot;Open Sans&quot;, sans-serif; word-spacing: 1px;"><span style="font-weight: 600;">Graph traversals</span></p><p style="color: rgb(37, 44, 51); font-family: &quot;Open Sans&quot;, sans-serif; word-spacing: 1px;">Graph traversal means visiting every vertex and edge exactly once in a well-defined order. While using certain graph algorithms, you must ensure that each vertex of the graph is visited exactly once. The order in which the vertices are visited are important and may depend upon the algorithm or question that you are solving.</p><p style="color: rgb(37, 44, 51); font-family: &quot;Open Sans&quot;, sans-serif; word-spacing: 1px;">During a traversal, it is important that you track which vertices have been visited. The most common way of tracking vertices is to mark them.</p><p style="color: rgb(37, 44, 51); font-family: &quot;Open Sans&quot;, sans-serif; word-spacing: 1px;"><span style="font-weight: 600;">Breadth First Search (BFS)</span></p><p style="color: rgb(37, 44, 51); font-family: &quot;Open Sans&quot;, sans-serif; word-spacing: 1px;">There are many ways to traverse graphs. BFS is the most commonly used approach.</p><p style="color: rgb(37, 44, 51); font-family: &quot;Open Sans&quot;, sans-serif; word-spacing: 1px;">BFS is a traversing algorithm where you should start traversing from a selected node (source or starting node) and traverse the graph layerwise thus exploring the neighbour nodes (nodes which are directly connected to source node). You must then move towards the next-level neighbour nodes.</p><p style="color: rgb(37, 44, 51); font-family: &quot;Open Sans&quot;, sans-serif; word-spacing: 1px;">As the name BFS suggests, you are required to traverse the graph breadthwise as follows:</p><ol style="color: rgb(37, 44, 51); font-family: &quot;Open Sans&quot;, sans-serif; word-spacing: 1px;"><li>First move horizontally and visit all the nodes of the current layer</li><li>Move to the next layer</li></ol><p style="color: rgb(37, 44, 51); font-family: &quot;Open Sans&quot;, sans-serif; word-spacing: 1px;">Consider the following diagram.&nbsp;</p><p style="color: rgb(37, 44, 51); font-family: &quot;Open Sans&quot;, sans-serif; word-spacing: 1px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<img src="https://he-s3.s3.amazonaws.com/media/uploads/fdec3c2.jpg" style="width: 648px;"></p><p style="color: rgb(37, 44, 51); font-family: &quot;Open Sans&quot;, sans-serif; word-spacing: 1px;">The distance between the nodes in layer 1 is comparitively lesser than the distance between the nodes in layer 2. Therefore, in BFS, you must traverse all the nodes in layer 1 before you move to the nodes in layer 2.</p><p style="color: rgb(37, 44, 51); font-family: &quot;Open Sans&quot;, sans-serif; word-spacing: 1px;"><span style="font-weight: 600;"><em>Traversing child nodes</em></span></p><p style="color: rgb(37, 44, 51); font-family: &quot;Open Sans&quot;, sans-serif; word-spacing: 1px;">A graph can contain cycles, which may bring you to the same node again while traversing the graph. To avoid processing of same node again, use a boolean array which marks the node after it is processed. While visiting the nodes in the layer of a graph, store them in a manner such that you can traverse the corresponding child nodes in a similar order.</p><p style="color: rgb(37, 44, 51); font-family: &quot;Open Sans&quot;, sans-serif; word-spacing: 1px;">In the earlier diagram, start traversing from 0 and visit its child nodes 1, 2, and 3. Store them in the order in which they are visited. This will allow you to visit the child nodes of 1 first (i.e. 4 and 5), then of 2 (i.e. 6 and 7), and then of 3 (i.e. 7) etc.</p><p style="color: rgb(37, 44, 51); font-family: &quot;Open Sans&quot;, sans-serif; word-spacing: 1px;">To make this process easy, use a queue to store the node and mark it as 'visited' until all its neighbours (vertices that are directly connected to it) are marked. The queue follows the First In First Out (FIFO) queuing method, and therefore, the neigbors of the node will be visited in the order in which they were inserted in the node i.e. the node that was inserted first will be visited first, and so on.</p><pre style="color: rgb(37, 44, 51); font-family: &quot;Open Sans&quot;, sans-serif; word-spacing: 1px;">&nbsp;BFS <span class="pun" style="background-color: transparent; font-family: Menlo, Monaco, Consolas, &quot;Courier New&quot;, monospace; font-size: inherit; white-space: pre-wrap; color: rgb(102, 102, 0);">(</span><span class="pln" style="background-color: transparent; color: inherit; font-family: Menlo, Monaco, Consolas, &quot;Courier New&quot;, monospace; font-size: inherit; white-space: pre-wrap;">G</span><span class="pun" style="background-color: transparent; font-family: Menlo, Monaco, Consolas, &quot;Courier New&quot;, monospace; font-size: inherit; white-space: pre-wrap; color: rgb(102, 102, 0);">,</span><span class="pln" style="background-color: transparent; color: inherit; font-family: Menlo, Monaco, Consolas, &quot;Courier New&quot;, monospace; font-size: inherit; white-space: pre-wrap;"> s</span><span class="pun" style="background-color: transparent; font-family: Menlo, Monaco, Consolas, &quot;Courier New&quot;, monospace; font-size: inherit; white-space: pre-wrap; color: rgb(102, 102, 0);">)</span><span class="pln" style="background-color: transparent; color: inherit; font-family: Menlo, Monaco, Consolas, &quot;Courier New&quot;, monospace; font-size: inherit; white-space: pre-wrap;">                   </span><span class="com" style="background-color: transparent; font-family: Menlo, Monaco, Consolas, &quot;Courier New&quot;, monospace; font-size: inherit; white-space: pre-wrap; color: rgb(136, 0, 0);">//Where G is the graph and s is the source node</span></pre><pre class="prettyprint prettyprinted" style="white-space: pre-wrap; padding: 10px; background-color: rgb(248, 248, 248); color: rgb(37, 44, 51); font-size: 14px; word-spacing: 1px;"><code><span class="pln">      </span><span class="kwd" style="color: rgb(0, 0, 136);">let</span><span class="pln"> Q be queue</span><span class="pun" style="color: rgb(102, 102, 0);">.</span><span class="pln">\r\n      Q</span><span class="pun" style="color: rgb(102, 102, 0);">.</span><span class="pln">enqueue</span><span class="pun" style="color: rgb(102, 102, 0);">(</span><span class="pln"> s </span><span class="pun" style="color: rgb(102, 102, 0);">)</span><span class="pln"> </span><span class="com" style="color: rgb(136, 0, 0);">//Inserting s in queue until all its neighbour vertices are marked.</span><span class="pln">\r\n\r\n      mark s </span><span class="kwd" style="color: rgb(0, 0, 136);">as</span><span class="pln"> visited</span><span class="pun" style="color: rgb(102, 102, 0);">.</span><span class="pln">\r\n      </span><span class="kwd" style="color: rgb(0, 0, 136);">while</span><span class="pln"> </span><span class="pun" style="color: rgb(102, 102, 0);">(</span><span class="pln"> Q </span><span class="kwd" style="color: rgb(0, 0, 136);">is</span><span class="pln"> </span><span class="kwd" style="color: rgb(0, 0, 136);">not</span><span class="pln"> empty</span><span class="pun" style="color: rgb(102, 102, 0);">)</span><span class="pln">\r\n           </span><span class="com" style="color: rgb(136, 0, 0);">//Removing that vertex from queue,whose neighbour will be visited now</span><span class="pln">\r\n           v  </span><span class="pun" style="color: rgb(102, 102, 0);">=</span><span class="pln">  Q</span><span class="pun" style="color: rgb(102, 102, 0);">.</span><span class="pln">dequeue</span><span class="pun" style="color: rgb(102, 102, 0);">(</span><span class="pln"> </span><span class="pun" style="color: rgb(102, 102, 0);">)</span><span class="pln">\r\n\r\n          </span><span class="com" style="color: rgb(136, 0, 0);">//processing all the neighbours of v  </span><span class="pln">\r\n          </span><span class="kwd" style="color: rgb(0, 0, 136);">for</span><span class="pln"> all neighbours w of v </span><span class="kwd" style="color: rgb(0, 0, 136);">in</span><span class="pln"> </span><span class="typ" style="color: rgb(102, 0, 102);">Graph</span><span class="pln"> G\r\n               </span><span class="kwd" style="color: rgb(0, 0, 136);">if</span><span class="pln"> w </span><span class="kwd" style="color: rgb(0, 0, 136);">is</span><span class="pln"> </span><span class="kwd" style="color: rgb(0, 0, 136);">not</span><span class="pln"> visited \r\n                        Q</span><span class="pun" style="color: rgb(102, 102, 0);">.</span><span class="pln">enqueue</span><span class="pun" style="color: rgb(102, 102, 0);">(</span><span class="pln"> w </span><span class="pun" style="color: rgb(102, 102, 0);">)</span><span class="pln">             </span><span class="com" style="color: rgb(136, 0, 0);">//Stores w in Q to further visit its neighbour</span><span class="pln">\r\n                        mark w </span><span class="kwd" style="color: rgb(0, 0, 136);">as</span><span class="pln"> visited</span><span class="pun" style="color: rgb(102, 102, 0);">.</span></code></pre><p style="color: rgb(37, 44, 51); font-family: &quot;Open Sans&quot;, sans-serif; word-spacing: 1px;"><br></p> \t\t\t\t\t\t\r\n \t\t\t\t\t	6	2018-01-24 12:29:27	2018-01-24 12:29:27	Breadth-first search (BFS) is an algorithm for traversing or searching tree or graph data structures. It starts at the tree root (or some arbitrary node of a graph .
\.


--
-- Data for Name: developer_education; Type: TABLE DATA; Schema: public; Owner: rebasedata
--

COPY public.developer_education (id, developer_id, education, starting_year, ending_year, created_at, updated_at) FROM stdin;
\.


--
-- Data for Name: developer_experiences; Type: TABLE DATA; Schema: public; Owner: rebasedata
--

COPY public.developer_experiences (id, developer_id, experience, created_at, updated_at, duration) FROM stdin;
13	1	Participate in many contest	2018-01-27 07:14:12	2018-01-27 07:14:12	2014-18
16	2	Internship at InfancyIt	2018-01-27 07:28:33	2018-01-27 07:28:33	2016-17
17	2	National Hackathon	2018-01-27 07:28:33	2018-01-27 07:28:33	2016
18	3	Participate in many contest	2018-01-27 07:35:09	2018-01-27 07:35:09	2014-2018
19	3	Winner Backathon	2018-01-27 07:35:09	2018-01-27 07:35:09	2017
20	4	national hackthon	2018-01-27 07:39:36	2018-01-27 07:39:36	2014
21	4	sust carnival	2018-01-27 07:39:36	2018-01-27 07:39:36	2015
22	5	national hackthon	2018-01-27 07:44:57	2018-01-27 07:44:57	2015
23	5	sust carnival	2018-01-27 07:44:57	2018-01-27 07:44:57	2017
24	6	Taking part in Free Code Camp	2018-01-27 07:49:24	2018-01-27 07:49:24	2017-2018
\.


--
-- Data for Name: developer_skill; Type: TABLE DATA; Schema: public; Owner: rebasedata
--

COPY public.developer_skill (id, developer_id, skill, created_at, updated_at) FROM stdin;
12	1	Java	2018-01-27 07:14:13	2018-01-27 07:14:13
13	1	Androiad	2018-01-27 07:14:13	2018-01-27 07:14:13
14	1	PHP	2018-01-27 07:14:13	2018-01-27 07:14:13
15	1	Laravel	2018-01-27 07:14:13	2018-01-27 07:14:13
16	1	JavaSpring	2018-01-27 07:14:13	2018-01-27 07:14:13
20	2	html	2018-01-27 07:28:33	2018-01-27 07:28:33
21	2	CSS	2018-01-27 07:28:34	2018-01-27 07:28:34
22	2	javascript	2018-01-27 07:28:34	2018-01-27 07:28:34
23	3	Java	2018-01-27 07:35:09	2018-01-27 07:35:09
24	3	Android	2018-01-27 07:35:09	2018-01-27 07:35:09
25	4	html	2018-01-27 07:39:36	2018-01-27 07:39:36
26	4	css	2018-01-27 07:39:36	2018-01-27 07:39:36
27	4	php	2018-01-27 07:39:36	2018-01-27 07:39:36
28	5	html	2018-01-27 07:44:57	2018-01-27 07:44:57
29	5	css	2018-01-27 07:44:57	2018-01-27 07:44:57
30	5	php	2018-01-27 07:44:57	2018-01-27 07:44:57
31	6	java	2018-01-27 07:49:24	2018-01-27 07:49:24
32	6	html	2018-01-27 07:49:24	2018-01-27 07:49:24
33	6	css	2018-01-27 07:49:24	2018-01-27 07:49:24
34	6	javascript	2018-01-27 07:49:24	2018-01-27 07:49:24
35	6	php	2018-01-27 07:49:24	2018-01-27 07:49:24
36	6	laravel	2018-01-27 07:49:24	2018-01-27 07:49:24
\.


--
-- Data for Name: developers; Type: TABLE DATA; Schema: public; Owner: rebasedata
--

COPY public.developers (id, name, specialty, email, website, facebook, twitter, github, linkedin, created_at, updated_at, image) FROM stdin;
1	Mahir Hasan	All rounder	mahirhasan36@yahoo.com	#	http://facebook.com/mahirhasan36	#	#	#	2018-01-17 04:15:46	2018-01-17 04:15:46	img/developer_list/1517055029.jpg
2	Shoiab Alam	Web Developer	shoiab@gmail.com	www.gh.com	#	#	#	#	2018-01-17 04:29:58	2018-01-17 04:29:58	img/developer_list/1517056113.jpg
3	Darpon Islam	Android Developer	darpon@gmail.com	#	https://www.facebook.com/darpon055?lst=100008391305686%3A100001153511724%3A1517056318	#	#	#	2018-01-17 04:36:06	2018-01-17 04:36:06	img/developer_list/1517056509.jpg
4	Ashraf Uddin Tafadar	Web Developer	tafadar@gmail.com	#	https://www.facebook.com/ashrafuddin.tafadar?lst=100008391305686%3A100002727274175%3A1517056616	#	#	#	2018-01-17 04:43:54	2018-01-17 04:43:54	img/developer_list/1517056776.jpg
5	Spectator Pioneer	Web Developer	spectatorpioneer@gmail.com	#	http://facebook.com/spectatorpioneer	#	#	#	2018-01-17 04:44:20	2018-01-17 04:44:20	img/developer_list/1517057097.jpg
6	Alimur Razi Rana	Web Developer	alimurrazi570@gmail.com	#	https://www.facebook.com/profile.php?id=100008391305686	#	#	#	2018-01-17 10:44:20	2018-01-17 10:44:20	img/developer_list/1517057364.jpg
\.


--
-- Data for Name: images; Type: TABLE DATA; Schema: public; Owner: rebasedata
--

COPY public.images (id, dir, description, created_at, updated_at) FROM stdin;
2	img/gallery/1515818880.jpg	another hackathon	2018-01-12 10:40:19	2018-01-12 10:40:19
3	img/gallery/1515813251.jpg	codathon	2018-01-12 22:14:11	2018-01-12 22:14:11
5	img/gallery/1516418646.jpg	Introduction to game development	2018-01-19 22:24:06	2018-01-19 22:24:06
6	img/gallery/1517033662.jpg	Hackathon is running	2018-01-27 01:14:22	2018-01-27 01:14:22
7	img/gallery/1517033698.jpg	Workshop on Android 	2018-01-27 01:14:58	2018-01-27 01:14:58
8	img/gallery/1517034214.jpg	Introduction to game development	2018-01-27 01:23:34	2018-01-27 01:23:34
\.


--
-- Data for Name: messages; Type: TABLE DATA; Schema: public; Owner: rebasedata
--

COPY public.messages (id, email, content, created_at, updated_at) FROM stdin;
1	alimurrazi570@gmail.com	                                Good , Well done!   \r\n                                	2018-01-27 05:04:15	2018-01-27 05:04:15
2	ranasust42@gmail.com	                                    \r\n                                I wish your success. Please not only concern in SUST but also overall developer community in Bangladesh .	2018-01-27 06:14:26	2018-01-27 06:14:26
\.


--
-- Data for Name: migrations; Type: TABLE DATA; Schema: public; Owner: rebasedata
--

COPY public.migrations (id, migration, batch) FROM stdin;
1	2014_10_12_000000_create_users_table	1
2	2014_10_12_100000_create_password_resets_table	1
3	2018_01_07_032250_create_images_table	1
4	2018_01_16_031738_create_developers_table	2
5	2018_01_16_033314_create_experience_table	3
6	2018_01_16_033947_create_education_table	3
7	2018_01_16_034602_create_skill_table	3
8	2018_01_16_110308_add_image_to_developers_table	4
10	2018_01_17_055036_edit_experience_table	5
11	2018_01_17_085217_announcementTable	6
12	2018_01_17_095230_attachment	7
13	2018_01_18_041012_edit_announcement_table	8
14	2018_01_19_041250_create_blogs_table	9
15	2018_01_22_040551_add_preview_to_blogs_table	10
16	2018_01_22_070938_create_tags_table	11
17	2018_01_22_084137_create_tag_relation_table	12
18	2018_01_22_085741_edit_author_to_blogs_table	13
19	2018_01_24_190750_create_awards_table	14
20	2018_01_24_200535_add_title_to_awards_table	15
21	2018_01_26_144509_create_projects_table	16
22	2018_01_27_094537_create_messages_table	17
23	2018_01_27_154049_create_admins_table	18
\.


--
-- Data for Name: password_resets; Type: TABLE DATA; Schema: public; Owner: rebasedata
--

COPY public.password_resets (email, token, created_at) FROM stdin;
\.


--
-- Data for Name: projects; Type: TABLE DATA; Schema: public; Owner: rebasedata
--

COPY public.projects (id, title, image, description, url, created_at, updated_at) FROM stdin;
1	SUST CSE Developer's Network (SCDN)	img/project/1516979923.JPG	website for SCDN .Developed by Alimur Razi Rana & Ruman Islam	/	2018-01-26 10:18:43	2018-01-26 10:18:43
2	Balls!	img/project/1517044380.JPG	This puzzle type android app is developed by Gautam Chowdhury & Sayf Uddin Al Azad Sagor	https://play.google.com/store/apps/details?id=com.FluxStudio.Balls&hl=en	2018-01-27 04:13:00	2018-01-27 04:13:00
3	TankMani	img/project/1517045028.JPG	A classic War game .Developed by Montaser Hamid & Jamil Ahmed	https://play.google.com/store/apps/details?id=com.jamil88.TankMania&hl=en	2018-01-27 04:23:48	2018-01-27 04:23:48
4	DareIt?	img/project/1517045991.JPG	The game was developed by Maruf Ahmed Mridul and Arnab Sen Sharma	https://play.google.com/store/apps/details?id=com.Osprishyo.DareIt&hl=en	2018-01-27 04:39:51	2018-01-27 04:39:51
\.


--
-- Data for Name: _tag_relations; Type: TABLE DATA; Schema: public; Owner: rebasedata
--

COPY public.tag_relations (id, blog_id, tag_id, created_at, updated_at) FROM stdin;
1	3	3	2018-01-22 04:45:18	2018-01-22 04:45:18
2	4	1	2018-01-24 12:29:27	2018-01-24 12:29:27
\.


--
-- Data for Name: _tags; Type: TABLE DATA; Schema: public; Owner: rebasedata
--

COPY public.tags (id, name, content, created_at, updated_at) FROM stdin;
1	C	One of the oldest and most popular programming language		
2	C#	C# is a multi-paradigm programming language encompassing strong typing, imperative, declarative, functional, generic, object-oriented, and component-oriented programming disciplines.		
3	JavaScript	It's not Java It is Javascript		
4	PHP	PHP is a server-side scripting language designed for web development but also used as a general-purpose programming language. Originally created by Rasmus Lerdorf in 1994, the PHP reference implementation is now produced by The PHP Group.	2018-01-25 04:06:58	2018-01-25 04:06:58
\.


--
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: rebasedata
--

COPY public.users (id, name, email, password, remember_token, created_at, updated_at) FROM stdin;
1	Alimur Razi	alimurrazi570@gmail.com	$2y$10$WjtJChFF5EvMoUf8wKQyhuH9fmi8.nAfdi9.HFlM7MPzNgD9pNs5O	sDBNdieRzDW6ENCPyemQlow4JsrcFUp2PTCZw3zYyChm8c6HDpmWK7sC4DxX	2018-01-12 00:51:20	2018-01-28 01:52:32
2	Rana Muhammad	ranasust42@gmail.com	$2y$10$L5i5hAPyWh18PvxjHcTFaemyia6zHANLwMN0bQg.rgTxRfzDF0p1q	xDZwUf0PiBbiexcX88UE8jVLp9828A0I6TTcR7fMvpYqIYbfNUy2NUhBVSlj	2018-01-27 11:13:07	2018-01-27 12:01:09
\.


--
-- PostgreSQL database dump complete
--

