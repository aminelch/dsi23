# Introduction


A force d'utiliser des commandes SQL, j'ai pensé les mettre dans un seul endroit : sur mon SITE.  

Ainsi, je cherche à faire quelque chose, je viens chercher ici.  

Si je ne sais pas, je cherche sur Google, et je renseigne ici, je retrouverai plus facilement.  

# Commandes de base

## Bases de données

### Créer et supprimer des bases

Pour crée une base de données, saisir simplement :  

<span class="formatter-code">Code SQL :</span>

<div class="code">

<pre style="display:inline;">

<pre class="sql" style="font-family:monospace;"><span style="color: #993333; font-weight: bold;">CREATE</span> <span style="color: #993333; font-weight: bold;">DATABASE</span> superbase;</pre>

</pre>

</div>

Pour la supprimer :  

<span class="formatter-code">Code SQL :</span>

<div class="code">

<pre style="display:inline;">

<pre class="sql" style="font-family:monospace;"><span style="color: #993333; font-weight: bold;">DROP</span> <span style="color: #993333; font-weight: bold;">DATABASE</span> superbase;</pre>

</pre>

</div>

### Utiliser les bases

Pour se connecter à la base :  
<span class="formatter-code">Code SQL :</span>

<div class="code">

<pre style="display:inline;">

<pre class="sql" style="font-family:monospace;"><span style="color: #993333; font-weight: bold;">USE</span> superbase;</pre>

</pre>

</div>

## Gestion des utilisateurs

### Créer des utilisateurs

Pour créer un utilisateur, voici la commande :  

Quelque soit l'hôte :  
<span class="formatter-code">Code SQL :</span>

<div class="code">

<pre style="display:inline;">

<pre class="sql" style="font-family:monospace;"><span style="color: #993333; font-weight: bold;">CREATE</span> <span style="color: #993333; font-weight: bold;">USER</span> <span style="color: #ff0000;">'utilisateur'</span>@<span style="color: #ff0000;">'%'</span> <span style="color: #993333; font-weight: bold;">IDENTIFIED</span> <span style="color: #993333; font-weight: bold;">BY</span> <span style="color: #ff0000;">'motdepasse'</span>;</pre>

</pre>

</div>

Que pour localhost :  
<span class="formatter-code">Code SQL :</span>

<div class="code">

<pre style="display:inline;">

<pre class="sql" style="font-family:monospace;"><span style="color: #993333; font-weight: bold;">CREATE</span> <span style="color: #993333; font-weight: bold;">USER</span> <span style="color: #ff0000;">'utilisateur'</span>@<span style="color: #ff0000;">'localhost'</span> <span style="color: #993333; font-weight: bold;">IDENTIFIED</span> <span style="color: #993333; font-weight: bold;">BY</span> <span style="color: #ff0000;">'motdepasse'</span>;</pre>

</pre>

</div>

### Attribuer des droits aux utilisateurs

Pour attribuer tous les droits à un utilisateur (en faire en quelque sortes un deuxième root) :  

<span class="formatter-code">Code SQL :</span>

<div class="code">

<pre style="display:inline;">

<pre class="sql" style="font-family:monospace;"><span style="color: #993333; font-weight: bold;">GRANT</span> <span style="color: #993333; font-weight: bold;">ALL</span> PRIVILEGES <span style="color: #993333; font-weight: bold;">ON</span> <span style="color: #66cc66;">*</span> <span style="color: #66cc66;">.</span> <span style="color: #66cc66;">*</span> <span style="color: #993333; font-weight: bold;">TO</span> <span style="color: #ff0000;">'utilisateur'</span>@<span style="color: #ff0000;">'localhost'</span> <span style="color: #993333; font-weight: bold;">IDENTIFIED</span> <span style="color: #993333; font-weight: bold;">BY</span> <span style="color: #ff0000;">'motdepasse'</span> <span style="color: #993333; font-weight: bold;">WITH</span> <span style="color: #993333; font-weight: bold;">GRANT</span> <span style="color: #993333; font-weight: bold;">OPTION</span> MAX_QUERIES_PER_HOUR <span style="color: #cc66cc;">0</span> MAX_CONNECTIONS_PER_HOUR <span style="color: #cc66cc;">0</span> MAX_UPDATES_PER_HOUR <span style="color: #cc66cc;">0</span> MAX_USER_CONNECTIONS <span style="color: #cc66cc;">0</span> ;</pre>

</pre>

</div>

Ou même en lecture seule :  
<span class="formatter-code">Code SQL :</span>

<div class="code">

<pre style="display:inline;">

<pre class="sql" style="font-family:monospace;"><span style="color: #993333; font-weight: bold;">GRANT</span> <span style="color: #993333; font-weight: bold;">SELECT</span> <span style="color: #993333; font-weight: bold;">ON</span> <span style="color: #66cc66;">*</span> <span style="color: #66cc66;">.</span> <span style="color: #66cc66;">*</span> <span style="color: #993333; font-weight: bold;">TO</span> <span style="color: #ff0000;">'utilisateur'</span>@<span style="color: #ff0000;">'localhost'</span> <span style="color: #993333; font-weight: bold;">IDENTIFIED</span> <span style="color: #993333; font-weight: bold;">BY</span> <span style="color: #ff0000;">'motdepasse'</span> ;</pre>

</pre>

</div>

<span class="notice">On peut faire du 2 en 1\. Voici un exemple pour la création d'un utilisateur sans mot de passe avec des droits en lecture seule :  
<span class="formatter-code">Code SQL :</span>

<div class="code">

<pre style="display:inline;">

<pre class="sql" style="font-family:monospace;"><span style="color: #993333; font-weight: bold;">GRANT</span> <span style="color: #993333; font-weight: bold;">SELECT</span> <span style="color: #993333; font-weight: bold;">ON</span> <span style="color: #66cc66;">*.*</span> <span style="color: #993333; font-weight: bold;">TO</span> <span style="color: #ff0000;">'ro'</span>@<span style="color: #ff0000;">'localhost'</span>;</pre>

</pre>

</div>

</span>  

Voici une commande pour créer un utilisateur juste pour la sauvegarde :  
<span class="formatter-code">Code SQL :</span>

<div class="code">

<pre style="display:inline;">

<pre class="sql" style="font-family:monospace;"><span style="color: #993333; font-weight: bold;">CREATE</span> <span style="color: #993333; font-weight: bold;">USER</span> <span style="color: #ff0000;">'backup'</span>@<span style="color: #ff0000;">'localhost'</span> <span style="color: #993333; font-weight: bold;">IDENTIFIED</span> <span style="color: #993333; font-weight: bold;">BY</span> <span style="color: #ff0000;">'motdepasse'</span>;
<span style="color: #993333; font-weight: bold;">GRANT</span> <span style="color: #993333; font-weight: bold;">SELECT</span><span style="color: #66cc66;">,</span> <span style="color: #993333; font-weight: bold;">SHOW</span> <span style="color: #993333; font-weight: bold;">VIEW</span><span style="color: #66cc66;">,</span> RELOAD<span style="color: #66cc66;">,</span> REPLICATION CLIENT<span style="color: #66cc66;">,</span> EVENT<span style="color: #66cc66;">,</span> <span style="color: #993333; font-weight: bold;">TRIGGER</span> <span style="color: #993333; font-weight: bold;">ON</span> <span style="color: #66cc66;">*.*</span> <span style="color: #993333; font-weight: bold;">TO</span> <span style="color: #ff0000;">'backup'</span>@<span style="color: #ff0000;">'localhost'</span>;
<span style="color: #993333; font-weight: bold;">GRANT</span> <span style="color: #993333; font-weight: bold;">LOCK</span> <span style="color: #993333; font-weight: bold;">TABLES</span> <span style="color: #993333; font-weight: bold;">ON</span> <span style="color: #66cc66;">*.*</span> <span style="color: #993333; font-weight: bold;">TO</span> <span style="color: #ff0000;">'backup'</span>@<span style="color: #ff0000;">'localhost'</span>;</pre>

</pre>

</div>

De la même façon, on peut supprimer ds droits avec REVOKE :  

<span class="formatter-code">Code SQL :</span>

<div class="code">

<pre style="display:inline;">

<pre class="sql" style="font-family:monospace;"><span style="color: #993333; font-weight: bold;">REVOKE</span> <span style="color: #993333; font-weight: bold;">ALL</span> <span style="color: #993333; font-weight: bold;">ON</span> <span style="color: #66cc66;">*.*</span> <span style="color: #993333; font-weight: bold;">FROM</span> <span style="color: #ff0000;">'utilisateur'</span>@<span style="color: #ff0000;">'localhost'</span>;</pre>

</pre>

</div>

### Changer un mot de passe d'utilisateur de MySQL

Cette commande fonctionne uniquement pour MySQL :  
<span class="formatter-code">Code SQL :</span>

<div class="code">

<pre style="display:inline;">

<pre class="sql" style="font-family:monospace;"><span style="color: #993333; font-weight: bold;">UPDATE</span> mysql<span style="color: #66cc66;">.</span><span style="color: #993333; font-weight: bold;">USER</span> <span style="color: #993333; font-weight: bold;">SET</span> password<span style="color: #66cc66;">=</span>PASSWORD<span style="color: #66cc66;">(</span><span style="color: #ff0000;">"nouveau"</span><span style="color: #66cc66;">)</span> <span style="color: #993333; font-weight: bold;">WHERE</span> <span style="color: #993333; font-weight: bold;">USER</span><span style="color: #66cc66;">=</span><span style="color: #ff0000;">"utilisateur"</span>;</pre>

</pre>

</div>

### Voir les utilisateurs

Pour voir les utilisateurs créés :  

<span class="formatter-code">Code SQL :</span>

<div class="code">

<pre style="display:inline;">

<pre class="sql" style="font-family:monospace;"><span style="color: #993333; font-weight: bold;">SELECT</span> <span style="color: #993333; font-weight: bold;">USER</span><span style="color: #66cc66;">,</span>host<span style="color: #66cc66;">,</span>password <span style="color: #993333; font-weight: bold;">FROM</span> mysql<span style="color: #66cc66;">.</span><span style="color: #993333; font-weight: bold;">USER</span>;</pre>

</pre>

</div>

### Voir les droits des utilisateurs

Pour un utilisateur donné, on peut voir ses droits de la façon suivante :  

<span class="formatter-code">Code SQL :</span>

<div class="code">

<pre style="display:inline;">

<pre class="sql" style="font-family:monospace;"><span style="color: #993333; font-weight: bold;">SHOW</span> GRANTS <span style="color: #993333; font-weight: bold;">FOR</span> <span style="color: #ff0000;">"utilisateur"</span>@<span style="color: #ff0000;">"localhost"</span>;</pre>

</pre>

</div>

## Tables

### Créer et supprimer des tables

Pour créer une table simple, voici un exemple :  

<span class="formatter-code">Code SQL :</span>

<div class="code">

<pre style="display:inline;">

<pre class="sql" style="font-family:monospace;"> 
<span style="color: #993333; font-weight: bold;">CREATE</span> <span style="color: #993333; font-weight: bold;">TABLE</span> matable <span style="color: #66cc66;">(</span>
id <span style="color: #993333; font-weight: bold;">INT</span><span style="color: #66cc66;">(</span><span style="color: #cc66cc;">20</span><span style="color: #66cc66;">)</span> <span style="color: #993333; font-weight: bold;">NOT</span> <span style="color: #993333; font-weight: bold;">NULL</span> <span style="color: #993333; font-weight: bold;">AUTO_INCREMENT</span> COMMENT <span style="color: #ff0000;">'id, autoincrémenté'</span><span style="color: #66cc66;">,</span>
datecreation datetime <span style="color: #993333; font-weight: bold;">NOT</span> <span style="color: #993333; font-weight: bold;">NULL</span><span style="color: #66cc66;">,</span>
titre <span style="color: #993333; font-weight: bold;">VARCHAR</span><span style="color: #66cc66;">(</span><span style="color: #cc66cc;">32</span><span style="color: #66cc66;">)</span><span style="color: #66cc66;">,</span>
contenu text<span style="color: #66cc66;">,</span>
<span style="color: #993333; font-weight: bold;">PRIMARY</span> <span style="color: #993333; font-weight: bold;">KEY</span> <span style="color: #66cc66;">(</span>id<span style="color: #66cc66;">)</span>
<span style="color: #66cc66;">)</span> <span style="color: #993333; font-weight: bold;">DEFAULT</span> CHARSET<span style="color: #66cc66;">=</span>utf8;</pre>

</pre>

</div>

### SELECT

### INSERT

### UPDATE

### DELETE

### ALTER

ALTER permet de modifier une table.  

On peut ajouter une colonne à la table :  

<span class="formatter-code">Code SQL :</span>

<div class="code">

<pre style="display:inline;">

<pre class="sql" style="font-family:monospace;"><span style="color: #993333; font-weight: bold;">ALTER</span> <span style="color: #993333; font-weight: bold;">TABLE</span> matable <span style="color: #993333; font-weight: bold;">ADD</span> <span style="color: #993333; font-weight: bold;">COLUMN</span> <span style="color: #66cc66;">(</span>macol <span style="color: #993333; font-weight: bold;">VARCHAR</span><span style="color: #66cc66;">(</span><span style="color: #cc66cc;">32</span><span style="color: #66cc66;">)</span> <span style="color: #993333; font-weight: bold;">NOT</span> <span style="color: #993333; font-weight: bold;">NULL</span><span style="color: #66cc66;">)</span>;</pre>

</pre>

</div>

Modifier le type d'une colonne :  

<span class="formatter-code">Code SQL :</span>

<div class="code">

<pre style="display:inline;">

<pre class="sql" style="font-family:monospace;"><span style="color: #993333; font-weight: bold;">ALTER</span> <span style="color: #993333; font-weight: bold;">TABLE</span> matable <span style="color: #993333; font-weight: bold;">MODIFY</span> macol <span style="color: #993333; font-weight: bold;">INT</span><span style="color: #66cc66;">(</span><span style="color: #cc66cc;">32</span><span style="color: #66cc66;">)</span> <span style="color: #993333; font-weight: bold;">NOT</span> <span style="color: #993333; font-weight: bold;">NULL</span>;</pre>

</pre>

</div>

Supprimer une colonne :  

<span class="formatter-code">Code SQL :</span>

<div class="code">

<pre style="display:inline;">

<pre class="sql" style="font-family:monospace;"><span style="color: #993333; font-weight: bold;">ALTER</span> <span style="color: #993333; font-weight: bold;">TABLE</span> matable <span style="color: #993333; font-weight: bold;">DROP</span> <span style="color: #993333; font-weight: bold;">COLUMN</span> macol;</pre>

</pre>

</div>

Ou renommer une colonne :  

<span class="formatter-code">Code SQL :</span>

<div class="code">

<pre style="display:inline;">

<pre class="sql" style="font-family:monospace;"><span style="color: #993333; font-weight: bold;">ALTER</span> <span style="color: #993333; font-weight: bold;">TABLE</span> matable <span style="color: #993333; font-weight: bold;">CHANGE</span> macol manewcol <span style="color: #993333; font-weight: bold;">INTEGER</span><span style="color: #66cc66;">(</span><span style="color: #cc66cc;">10</span><span style="color: #66cc66;">)</span>;</pre>

</pre>

</div>

### RENAME

RENAME permet de renommer une table :  

<span class="formatter-code">Code SQL :</span>

<div class="code">

<pre style="display:inline;">

<pre class="sql" style="font-family:monospace;"><span style="color: #993333; font-weight: bold;">RENAME</span> <span style="color: #993333; font-weight: bold;">TABLE</span> table1 <span style="color: #993333; font-weight: bold;">TO</span> table2;</pre>

</pre>

</div>