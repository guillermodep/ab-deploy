FROM image-registry.openshift-image-registry.svc:5000/openshift/php@sha256:a5aaaae5baf98cb674ac2352429e0450591b45d3674e44c516612a9ee67282d5
LABEL "io.openshift.build.image"="image-registry.openshift-image-registry.svc:5000/openshift/php@sha256:a5aaaae5baf98cb674ac2352429e0450591b45d3674e44c516612a9ee67282d5" "io.openshift.build.commit.author"="guillermodep <58941444+guillermodep@users.noreply.github.com>" "io.openshift.build.commit.date"="Thu Jan 16 15:49:34 2020 -0300" "io.openshift.build.commit.id"="3054461712f33f11b9ec26a92751beab0b026c3b" "io.openshift.build.commit.ref"="HEAD" "io.openshift.build.commit.message"="Update index.php" "io.openshift.build.source-location"="https://github.com/guillermodep/ab-deploy"
ENV OPENSHIFT_BUILD_NAME="abdeploy-4" OPENSHIFT_BUILD_NAMESPACE="abdeploy" OPENSHIFT_BUILD_SOURCE="https://github.com/guillermodep/ab-deploy" OPENSHIFT_BUILD_COMMIT="3054461712f33f11b9ec26a92751beab0b026c3b"
USER root
COPY upload/src /tmp/src
RUN chown -R 1001:0 /tmp/src
USER 1001
RUN /usr/libexec/s2i/assemble
CMD /usr/libexec/s2i/run
